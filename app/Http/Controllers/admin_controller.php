<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\superadmin_model;
use App\Models\admin_model;
use App\Models\dokter_model;
use App\Models\antrian_model;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
}
