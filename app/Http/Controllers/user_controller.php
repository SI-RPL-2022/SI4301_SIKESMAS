<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\admin_model;
use App\Models\antrian_model;
use App\Models\poli_model;
use App\Models\kamar_model;
use App\Models\keluhan_model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class user_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (User::where('username',$request->username)->exists()){
            return redirect('/')->with('gagal_regis','Email sudah digunakan!');
        }else{
            User::create([
                'role' => "Pasien",
                'no_bpjs' => $request ->bpjs,
                'nik' => $request ->nik,
                'nama' => $request ->nama,
                'jenis_kelamin' => $request ->jenis_kelamin,
                'no_hp' => $request ->noHP,
                'username' => $request ->username,
                'password' => $request ->pass
            ]);
            return redirect('/');
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
        $user = User::find($id);
        return view('user.profil', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id',$id)->firstOrFail();
        return view('user.updateprofil',compact('user'));
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
        $pasien = User::find($id);
        $imgName = $pasien->img_path;
        if ($request->img_path){
            $imgName = $request->img_path->getClientOriginalName() . '-' . time()
                        . '.' . $request->img_path->extension();
            $request->img_path->move(public_path('foto_profil'), $imgName);
        }elseif ($request->img_path == null){
            $imgName = $pasien -> foto_profil;
        }

        $data = User::where('id',$id)->firstOrFail();
        if ($request->pass == $data->password){
            if ($data->role == "Pasien"){
                User::find($id)->update([
                    'no_bpjs' => $request ->bpjs,
                    'nik' => $request ->nik,
                    'nama_pasien' => $request ->nama,
                    'jenis_kelamin' => $request ->jenis_kelamin,
                    'no_hp' => $request ->noHP,
                    'foto_profil' => $imgName
                ]);
            }elseif ($data->role == "Dokter"){
                User::find($id)->update([
                    'foto_profil' => $imgName
                ]);
            }
            return redirect("/profil");
        }
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
        if (User::where('username',$request->username)->exists()){
            $data = User::where('username',$request->username)->firstOrFail();
            if($request->pass == $data->password){
                session(['login' => true]);
                session(['id' => $data -> id]);
                return redirect('/')->with('berhasil_login','Berhasil Login!');
                // if ($data->role == "Pasien"){
                //     session(['login' => true]);
                //     session(['id' => $data -> id]);
                //     return redirect('/')->with('berhasil_login','Berhasil Login!');
                // }elseif ($data->role == "Admin"){
                //     session(['login' => true]);
                //     session(['id' => $data -> id]);
                //     return redirect('/')->with('berhasil_login','Berhasil Login!');
                // }
            }else{
                return redirect('/login')->with('password_salah','Email atau Password salah!');
            }
        }else{
            return redirect('/login')->with('tidak_terdaftar','Email anda belum terdaftar');
        }
    }

    public function logout(Request $request){
        $request->session()->forget('login');
        $request->session()->forget('id');
        return redirect('/')->with('logout','Anda telah melakukan logout!');
    }

    public function antrian($id,$id_dokter){
        $id_user = session('id');
        $user = User::where('id',$id_user)->firstOrFail();
        $antrian = antrian_model::where('id_poli',$id)->where('status_antrian','Berjalan');
        $poli = poli_model::findOrfail($id);
        $dokter = User::where('id',$id_dokter)->firstOrFail();
        return view('user.antrian',compact('user','antrian','poli','dokter'));
    }

    public function antrianStore($id,$id_dokter){
        $id_user = session('id');
        $user = User::where('id',$id_user)->firstOrFail();
        $poli = poli_model::findOrfail($id);
        $dokter = User::findOrfail($id_dokter);
        $antrian = antrian_model::all();
        
        antrian_model::create([
            'no_antrian' => $antrian->count()+1,
            'id_pasien' => $user -> id,
            'id_poli' => $poli -> id,
            'id_dokter' => $dokter -> id,
            'status' => 'Menunggu Input Keluhan',
            'status_antrian' => 'Berjalan'
        ]);
        return redirect('/')->with('book','Anda telah berhasil melakukan Booking. Nomer Antrian anda adalah '.$antrian->count()+1);
    }

    public function jadwalDokter($id){
        if (session('login')){
            $id_user = session('id');
            $user = User::where('id',$id_user)->firstOrFail();
            $poli = poli_model::findOrfail($id);
            $polis = poli_model::where('id',$id)->with('user')->get();
            return view('user.jadwalDokter',compact('user','poli','polis'));
        }else{
            return redirect('/login')->with('fail','Anda harus melakukan login terlebih dahulu');
        }
        
    }

    public function resepObat(){
        $id_user = session('id');
        $user = User::where('id',$id_user)->firstOrFail();
        return view('user.resepObat',compact('user'));
    }
    public function book($id){
        $id_user = session('id');
        $user = User::where('id',$id_user)->firstOrFail();
        $id_antrian = $id;
        $kamar = kamar_model::orderBy('id','asc')->with('antrian')->get();
        return view('user.bookingKamar',compact('user','kamar','id_antrian'));
    }

    public function booking($id,$idkamar) {
        antrian_model::find($id)->update([
            'id_kamar' => $idkamar,
            'status' => 'Pasien Di Rawat',
            'status_antrian' => 'Selesai'
        ]);
        $kamar = kamar_model::find($idkamar);
        kamar_model::find($idkamar)->update([
            'jumlah_kamar' => $kamar->jumlah_kamar-1
        ]);

        return redirect('/')->with('berhasil_book','Silahkan Lanjutkan administrasi di Kasir');
    }

    public function hasilPeriksa($id) {
        $id_user = session('id');
        $user = User::where('id',$id_user)->firstOrFail();
        $antrian = antrian_model::where('id',$id)->with('kamar')->firstOrFail();
        return view('user.hasilPeriksa',compact('user','antrian'));
    }

    public function review($id){
        keluhan_model::create([
            'id_pasien' => $id,
            'nama_pasien' => request()->nama,
            'review' => request()->review
        ]);
        return redirect('/')->with('review','Terima Kasih sudah memakai layanan kami.');
    }

}
