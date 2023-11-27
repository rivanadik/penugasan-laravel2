<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\CollectionController;

/*
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
//Bagian 1 (awal)
Route::get('/mahasiswa', function () {
    $nama = 'Rivan Adi Kurniawan';
    $nilai = 90;
    return view('mahasiswa', compact('nama', 'nilai'));    
}); */

/*
//kedua
Route::get('/mahasiswa', function () {
    $nama = 'Rivan Adi Kurniawan';
    $nilai = [80,64,30,76,95];
    return view('mahasiswa', compact('nama', 'nilai'));    
});
*/


//Bagian 2 (awal)
Route::get('mahasiswa', function () {
    $arrMahasiswa = ["Rivan Adi Kurniawan","Supra","Scoopy","Honda"];
    return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
});

Route::get('dosen', function () {
    $arrDosen = ["Rivan, M.M","Adi, M.Pd","Kurniawan, M.Farm","Dr. Honda"];
    return view('dosen')->with('dosen', $arrDosen);
});

Route::get('gallery', function () {
    return view('gallery');
});


/*

Route::get('admin', function(){
    return view('admin');
});


Route::get('informasi/{fakultas}/{jurusan}', function ($fakultas, $jurusan) {
    $data = [$fakultas, $jurusan];
    return view('informasi')->with('data', $data);
})->name('info');
*/

Route::get('/exerciseCollection', [CollectionController::class, 'exercise']);