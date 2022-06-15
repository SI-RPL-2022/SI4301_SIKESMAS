<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\superadmin_model;
use App\Models\admin_model;
use App\Models\dokter_model;
use App\Models\antrian_model;
use App\Models\kamar_model;
use App\Models\User;
use App\Models\keluhan_model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class admin_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = User::where('role','Admin')->get();
        return view('admin.daftaradmin', compact('admin'));
    }
    public function indexDokter()
    {
        $dokter = User::where('role','Dokter')->with('poli')->get();
        return view('admin.daftardokter', compact('dokter'));
    }
    public function indexKamar()
    {
        $kamar = kamar_model::all();
        return view('admin.daftarkamar', compact('kamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (User::where('nama',$request->nama)->exists()){
            return redirect('/tambahadmin')->with('gagal_regis','Admin sudah terdaftar!');
        }else{
            User::create([
                'role' => "Admin",
                'nama' => $request ->nama,
                'no_hp' => $request ->noHP,
                'username' => $request ->username,
                'password' => $request ->pass
            ]);
            return redirect('/home');
        }
    }
    public function tambahdokter(Request $request)
    {
        if (User::where('nama',$request->nama)->exists()){
            return redirect('/tambahdokter')->with('gagal_regis','Dokter sudah terdaftar!');
        }else{
            User::create([
                'role' => "Dokter",
                'nama' => $request ->nama,
                'id_poli' => $request ->poli,
                'jam_praktik_awal' => $request ->jam1,
                'jam_praktik_akhir' => $request ->jam2,
                'username' => $request ->username,
                'password' => $request ->pass
            ]);
            return redirect('/home');
        }
    }
    public function tambahkamar(Request $request)
    {
        $imgName = $request->img_path->getClientOriginalName() . '-' . time()
                    . '.' . $request->img_path->extension();
        $request->img_path->move(public_path('image_kamar'), $imgName);
        kamar_model::create([
            'nama_kamar' => $request ->nama,
            'harga' => $request ->harga,
            'jumlah_kamar' => $request ->kuota,
            'tipe_kamar' => $request ->tipe,
            'foto' => $imgName
        ]);
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(Request $request){
        $data = superadmin_model::where('username',$request->username)->firstOrFail();
        if (superadmin_model::where('username',$request->username)->exists()){
            if($request->pass == $data->password){
                session(['loginAdmin' => true]);
                session(['id_superadmin' => $data -> id_superadmin]);
                return redirect('/home')->with('gagal','Email atau Password salah!');
            }else{
                return redirect('/superadmin')->with('gagal','Email atau Password salah!');
            }
        }else{
            return redirect('/superadmin')->with('tidak_terdaftar','Email anda belum terdaftar');
        }
    }
    public function logout(Request $request){
        $request->session()->forget('loginAdmin');
        $request->session()->forget('id_superadmin');
        return redirect('/superadmin')->with('logout','Anda telah melakukan logout!');
    }

    public function delDokter($id){
        User::find($id)->delete();
        return redirect('/indexDokter');
    }
    public function delAdmin($id){
        User::find($id)->delete();
        return redirect('/indexAdmin');
    }

    public function inputKeluhan($id){
        $id_user = session('id');
        $user = User::where('id',$id_user)->firstOrFail();
        $antrian = antrian_model::where('id',$id)->with('poli','pasien')->firstOrFail();
        return view('admin.inputkeluhan',compact('user','antrian'));
    }

    public function InputanKeluhan(Request $request, $id)
    {
        antrian_model::find($id)->update([
            'alamat' => $request ->alamat,
            'keluhan' => $request ->keluhan,
            'lama_keluhan' => $request ->lama,
            'waktu_periksa'=> join(" ",$request ->waktu),
            'status' => 'Menunggu Hasil Periksa'
        ]);

        return redirect("/admin/daftarantrian");
    }

    public function daftarpasien() {
        $id_user = session('id');
        $user = User::where('id',$id_user)->firstOrFail();
        $review = keluhan_model::all();
        $pasien = antrian_model::addSelect(DB::raw('COUNT("*") as pasien'))->GroupBy(DB::raw("DATE(created_at)"))->pluck('pasien');
        $hari = antrian_model::select(DB::raw("DATE(created_at) as hari"))->GroupBy(DB::raw("DATE(created_at)"))->pluck('hari');

        return view('admin.daftarpasien',compact('pasien','hari','user','review'));
    }

    public function gantidokter($id){
        $id_superadmin = session('id_superadmin');
        $superadmin = superadmin_model::where('id_superadmin',$id_superadmin)->firstOrFail();
        $dokter = User::find($id);

        return view('admin.updatedokter',compact('dokter'));
    }

    public function dokterupdate($id, Request $request){
        User::find($id)->update([
            'nama' => $request ->nama,
            'id_poli' => $request ->poli,
            'jam_praktik_awal' => $request ->jam1,
            'jam_praktik_akhir' => $request ->jam2,
            'username' => $request ->username
        ]);
        return redirect('/indexDokter');
    }

    public function gantiadmin($id){
        $id_superadmin = session('id_superadmin');
        $superadmin = superadmin_model::where('id_superadmin',$id_superadmin)->firstOrFail();
        $admin = User::find($id);

        return view('admin.updateadmin',compact('admin','superadmin'));
    }

    public function adminupdate($id, Request $request){
        User::find($id)->update([
            'nama' => $request ->nama,
            'no_hp' => $request ->noHP,
            'username' => $request ->username,
        ]);
        return redirect('/admin');
    }

    public function gantikamar($id){
        $id_superadmin = session('id_superadmin');
        $superadmin = superadmin_model::where('id_superadmin',$id_superadmin)->firstOrFail();
        $kamar = kamar_model::find($id);

        return view('admin.updatekamar',compact('kamar','superadmin'));
    }

    public function kamarupdate($id, Request $request){
        kamar_model::find($id)->update([
            'nama_kamar' => $request ->nama,
            'harga' => $request ->harga,
            'jumlah_kamar' => $request ->kuota,
            'tipe_kamar' => $request ->tipe
        ]);
        return redirect('/daftarKamar');
    }
}
