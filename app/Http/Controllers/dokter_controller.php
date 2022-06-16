<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\superadmin_model;
use App\Models\admin_model;
use App\Models\dokter_model;
use App\Models\antrian_model;
use App\Models\kamar_model;
use App\Models\User;

class dokter_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
    public function antrianPasien()
    {
        if (session('login')){
            $id = session('id');
            $user = User::where('id',$id)->firstOrFail();
            $antrian = antrian_model::where('id_dokter',$id)->where('status_antrian','Berjalan')->with('poli','pasien')->get();
            return view('dokter.antrianpasien',compact('user','antrian'));
        }else{
            return view('home');
        }
    }
    public function hasilPeriksa($id){
        $id_user = session('id');
        $user = User::where('id',$id_user)->firstOrFail();
        $antrian = antrian_model::where('id',$id)->with('poli','pasien')->firstOrFail();
        return view('dokter.hasilPeriksa',compact('user','antrian'));
    }

    public function Inputanhasil(Request $request, $id)
    {
        antrian_model::find($id)->update([
            'hasil_periksa' => $request ->hasil,
            'tindakan' => $request ->tindakan,
            'status' => 'Menunggu Respon Pasien'
            
        ]);

        return redirect("/dokter/antrianPasien");
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
