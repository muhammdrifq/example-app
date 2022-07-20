<?php

use App\Http\Controllers\hotelController;
use App\Http\Controllers\LatihanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pengenalanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SlotController;
use App\Http\Controllers\tabelmapelController;
use App\Http\Controllers\tabelpesertaController;
use App\Http\Controllers\tabelsiswaController;
use App\Http\Controllers\tableController;
use App\Http\Controllers\tableSiswaController;

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

Route::get('/', function () {
   return view('welcome');
});

// ROUTE HOME
Route::get('/home', function () {
    return view('home');
});

// ROUTE Pages 1
Route::get('/pages-1', function () {
    return view('pages-1.index');
});

// ROUTE Pages 2
Route::get('/pages-2', function () {
    return view('pages-2.index');
});

// ROUTE Pages 3 
Route::get('/pages-3', function () {
    return view('pages-3.index');
});


// ROUTE Paramater BIODATA
Route::get('/biodata/{nama}/{umur}/{alamat}/{jk}/{hobby}', function ($nama, $umur, $alamat, $jk, $hobby) {
    return view('pages-1.biodata', compact('nama', 'umur', 'alamat', 'jk', 'hobby'));
});

// ROUTE Optional Paramater MATERIAL
Route::get('/material/{material1}/{material2}', function ($material1 = "", $material2 = "") {
    return view('pages-1.material', compact('material1', 'material2'));
});

// ROUTE Controller
route::get('/pengenalan', [App\Http\Controllers\pengenalanController::class, 'pengenalan']);

// ROUTE Controller Paramater
route::get('/intro/{nama}/{alamat}/{umur}', [App\Http\Controllers\pengenalanController::class, 'intro']);

// ROUTE Controller Siswa
route::get('/siswa', [App\Http\Controllers\pengenalanController::class, 'siswa']);

// ROUTE Latihan Controller Menu
route::get('/menu', [LatihanController::class, 'menu']);

// ROUTE Latihan Controller Dosen
route::get('/dosen', [LatihanController::class, 'dosen']);

// ROUTE Latihan Controller Televisi
route::get('/tv', [LatihanController::class, 'televisi']);

//route controller POST
route::get('/post', [PostController::class, 'index']);

//route Tabel Siswa
route::get('/tabelsiswa', [tabelsiswaController::class, 'indexsiswa']);

//route Tabel Peserta
route::get('/tabelpeserta', [tabelpesertaController::class, 'indexpeserta']);

//route Tabel Mapel
route::get('/tabelmapel', [tabelmapelController::class, 'indexmapel']);

//ROUTE Tabel HOTEL
route::get('/hotel', [hotelController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/sis', SiswaController::class);
