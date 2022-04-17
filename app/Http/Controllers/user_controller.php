<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pasien_model;
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
        if (pasien_model::where('username',$request->username)->exists()){
            return redirect('/')->with('gagal_regis','Email sudah digunakan!');
        }else{
            pasien_model::create([
                'no_bpjs' => $request ->bpjs,
                'nik' => $request ->nik,
                'nama_pasien' => $request ->nama,
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
        $user = pasien_model::find($id);
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
        $user = pasien_model::where('id_pasien',$id)->firstOrFail();
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
        $data = pasien_model::where('id_pasien',$id)->firstOrFail();
        if ($request->pass == $data->password){
            pasien_model::find($id)->update([
                'no_bpjs' => $request ->bpjs,
                'nik' => $request ->nik,
                'nama_pasien' => $request ->nama,
                'jenis_kelamin' => $request ->jenis_kelamin,
                'no_hp' => $request ->noHP
            ]);

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
        $data = pasien_model::where('username',$request->username)->firstOrFail();
        if (pasien_model::where('username',$request->username)->exists()){
            if($request->pass == $data->password){
                session(['login' => true]);
                session(['id' => $data -> id_pasien]);
                return redirect('/')->with('berhasil_login','Berhasil Login!');
            }else{
                return redirect('/')->with('gagal','Email atau Password salah!');
            }
        }else{
            return redirect('/')->with('tidak_terdaftar','Email anda belum terdaftar');
        }
    }

    public function logout(Request $request){
        $request->session()->forget('login');
        $request->session()->forget('id');
        return redirect('/')->with('logout','Anda telah melakukan logout!');
    }
}
