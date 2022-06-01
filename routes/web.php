<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\admin_model;
use App\Models\superadmin_model;
use App\Models\poli_model;
use App\Models\antrian_model;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// USER ROUTE
Route::get('/', function () {
    if (session('login')){
        $id = session('id');
        $user = User::where('id',$id)->firstOrFail();
        $antrian = antrian_model::all();
        if ($user->role == "Pasien" or $user->role == "Admin"){
            $antrian = antrian_model::all();
            return view('home',compact('user','antrian'));
        }elseif ($user->role == "Dokter"){
            return view('dokter.home',compact('user'));
        }  
    }else{
        return view('home');
    }
});

Route::get('/layanan', function () {
    if (session('login')){
        $id = session('id');
        $user = User::where('id',$id)->firstOrFail();
        $poli = poli_model::orderBy('id','asc')->get();
        $antrian1 = antrian_model::where('id_poli',1)->get();
        $antrian2 = antrian_model::where('id_poli',2)->get();
        $antrian3 = antrian_model::where('id_poli',3)->get();
        $antrian4 = antrian_model::where('id_poli',4)->get();
        $antrian5 = antrian_model::where('id_poli',5)->get();
        $antrian6 = antrian_model::where('id_poli',6)->get();
        return view('user.layanan',compact('user','poli','antrian1','antrian2','antrian3','antrian4','antrian5','antrian6'));
    }else{
        $antrian1 = antrian_model::where('id_poli',1)->get();
        $antrian2 = antrian_model::where('id_poli',2)->get();
        $antrian3 = antrian_model::where('id_poli',3)->get();
        $antrian4 = antrian_model::where('id_poli',4)->get();
        $antrian5 = antrian_model::where('id_poli',5)->get();
        $antrian6 = antrian_model::where('id_poli',6)->get();
        $poli = poli_model::orderBy('id','asc')->get();
        return view('user.layanan',compact('poli','antrian1','antrian2','antrian3','antrian4','antrian5','antrian6'));
    }
});

Route::get('/HasilPeriksa', function () {
    if (session('login')){
        $id = session('id');
        $user = User::where('id',$id)->firstOrFail();
        $antrian = antrian_model::where('id_pasien',$id)->with('poli','dokter')->get();
        return view('user.hasilPeriksa',compact('user','antrian'));
    }else{
        return redirect('/');
    }
});


Route::get('/regis', function () {
    return view('user.registrasi');
});
Route::get('/login', function () {
    return view('user.login');
});

Route::get('/profil', function () {
    if (session('login')){
        $id = session('id');
        $user = User::where('id',$id)->firstOrFail();
        return view('user.profil',compact('user'));
    }else{
        return view('user.profil');
    }
});

Route::get('/jadwalDokter', function () {
    if (session('login')){
        $id = session('id');
        $user = User::where('id',$id)->firstOrFail();
        return view('user.jadwaldokter',compact('user'));
    }else{
        return view('user.jadwaldokter');
    }
});



// Pasien
Route::resource('/pasien', user_controller::class);
Route::get('layanan/{poli}/{dokter}/antrian', 'user_controller@antrian');
Route::get('layanan/{poli}', 'user_controller@jadwalDokter');
Route::post('login', 'user_controller@login')->name('login');
Route::get('logout', 'user_controller@logout')->name('logout');
Route::post('layanan/{poli}/{dokter}/input', 'user_controller@antrianStore');
Route::get('/ResepObat', 'user_controller@resepObat');
Route::get('/BookingKamar', 'user_controller@book');

// Dokter
Route::get('/dokter/antrianPasien', 'dokter_controller@antrianPasien');
Route::get('/dokter/hasilPeriksa/{antrian}', 'dokter_controller@hasilPeriksa');
Route::put('/dokter/inputhasilPeriksa/{antrian}', 'dokter_controller@Inputanhasil');

// Admin
Route::get('/superadmin', function () {
    if (session('loginAdmin')){
        return redirect('/home');
    }else{
        return view('admin.loginadmin');
    }
});
Route::get('/home', function () {
    if (session('loginAdmin')){
        $id = session('id_superadmin');
        $superadmin = superadmin_model::where('id_superadmin',$id)->firstOrFail();
        return view('admin.homeadmin',compact('superadmin'));
    }else{
        return redirect('/superadmin');
    }
});
Route::get('/tambahadmin', function () {
    if (session('loginAdmin')){
        $id = session('id_superadmin');
        $superadmin = superadmin_model::where('id_superadmin',$id)->firstOrFail();
        return view('admin.tambahadmin',compact('superadmin'));
    }else{
        return view('admin.tambahadmin');
    }
});
Route::get('/tambahdokter', function () {
    return view('admin.tambahdokter');
});

Route::get('admin/daftarantrian', function () {
    if (session('login')){
        $id = session('id');
        $user = User::where('id',$id)->firstOrFail();
        $antrian = antrian_model::orderBy('id','asc')->with('poli','pasien')->get();
        return view('admin.daftarantrian',compact('user','antrian'));
    }else{
        return view('home');
    }
});

Route::resource('/admin', admin_controller::class);
Route::post('loginAdmin', 'admin_controller@login')->name('loginAdmin');
Route::get('logoutAdmin', 'admin_controller@logout')->name('logoutAdmin');
Route::post('tambahdokter', 'admin_controller@tambahdokter')->name('tambahdokter');
Route::get('indexDokter', 'admin_controller@indexDokter')->name('indexDokter');
Route::get('admin/KeluhanPasien/{antrian}', 'admin_controller@inputKeluhan');
Route::put('/admin/KeluhanPasien/inputkeluhan/{antrian}', 'admin_controller@InputanKeluhan');
Route::delete('/delete/dokter/{dokter}', 'admin_controller@delDokter');
Route::delete('/delete/admin/{admin}', 'admin_controller@delAdmin');

