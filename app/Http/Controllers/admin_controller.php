<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\superadmin_model;
use App\Models\admin_model;
use App\Models\dokter_model;
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
        $admin = admin_model::orderBy('id_admin','asc')->get();
        return view('admin.daftaradmin', compact('admin'));
    }
    public function indexDokter()
    {
        $dokter = dokter_model::orderBy('id_dokter','asc')->get();
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
        if (admin_model::where('nama_admin',$request->nama)->exists()){
            return redirect('/tambahadmin')->with('gagal_regis','Admin sudah terdaftar!');
        }else{
            admin_model::create([
                'nama_admin' => $request ->nama,
                'no_hp' => $request ->noHP,
                'username' => $request ->username,
                'password' => $request ->pass
            ]);
            return redirect('/home');
        }
    }
    public function tambahdokter(Request $request)
    {
        if (dokter_model::where('nama_dokter',$request->nama)->exists()){
            return redirect('/tambahdokter')->with('gagal_regis','Dokter sudah terdaftar!');
        }else{
            dokter_model::create([
                'nama_dokter' => $request ->nama,
                'poli_layanan' => $request ->poli,
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
                return redirect('/admin')->with('gagal','Email atau Password salah!');
            }
        }else{
            return redirect('/admin')->with('tidak_terdaftar','Email anda belum terdaftar');
        }
    }
    public function logout(Request $request){
        $request->session()->forget('loginAdmin');
        $request->session()->forget('id_superadmin');
        return redirect('/superadmin')->with('logout','Anda telah melakukan logout!');
    }
}
