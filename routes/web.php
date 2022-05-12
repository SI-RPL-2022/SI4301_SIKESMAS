<?php

use Illuminate\Support\Facades\Route;
use App\Models\pasien_model;
use App\Models\superadmin_model;

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
        $user = pasien_model::where('id_pasien',$id)->firstOrFail();
        return view('home',compact('user'));
    }else{
        return view('home');
    }
});
Route::get('/regis', function () {
    return view('user.registrasi');
});
Route::get('/login', function () {
    return view('user.login');
});
Route::get('/booking', function () {
    return view('user.bookingantrian');
});
Route::get('/profil', function () {
    if (session('login')){
        $id = session('id');
        $user = pasien_model::where('id_pasien',$id)->firstOrFail();
        return view('user.profil',compact('user'));
    }else{
        return view('user.profil');
    }
});

// Pasien
Route::resource('/pasien', user_controller::class);
Route::post('login', 'user_controller@login')->name('login');
Route::get('logout', 'user_controller@logout')->name('logout');

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

Route::resource('/admin', admin_controller::class);
Route::post('loginAdmin', 'admin_controller@login')->name('loginAdmin');
Route::get('logoutAdmin', 'admin_controller@logout')->name('logoutAdmin');
Route::post('tambahdokter', 'admin_controller@tambahdokter')->name('tambahdokter');
Route::get('indexDokter', 'admin_controller@indexDokter')->name('indexDokter');
