<?php

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProdukController2;
use App\Http\Controllers\ProdukControllerUTS;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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

Route::get('/RioAnugrahPutra', function () {
    return view('RioAnugrahPutra');
});

Route::get('/tes',[ProdukController::class,'index']);
Route::get('/produk/show',[ProdukController::class,'show']);
Route::get('/show',[ProdukController::class,'show_eloquent']);
Route::get('/insert',[ProdukController::class,'insert_eloquent']);
Route::get('/update',[ProdukController::class,'update_eloquent']);
Route::get('/coba',[ProdukController2::class,'index']);
Route::get('/coba/create',[ProdukController2::class,'create']);
Route::post('/coba',[ProdukController2::class,'store']);

Route::resource('produk',ProdukControllerUTS::class);
//Route::get('/tawal',[ProdukControllerUTS::class,'index']);
//Route::get('/tawal/membuat',[ProdukControllerUTS::class,'create']);
//Route::post('/tawal/store',[ProdukControllerUTS::class,'store']);
//Route::post('/tawal/{$id}/edit',[ProdukControllerUTS::class,'update']);
//Route::post('/edit/{$id}',[ProdukControllerUTS::class,'edit']);
//Route::post('/tawal/{$id}',[ProdukControllerUTS::class,'destroy']);







Route::get('/show/{id?}',function
($id=1){echo "Nilai Parameter Adalah ".$id;});

Route::get('/edit/{nama}', function ($nama){
echo "Nilai Parameter Adalah ".$nama;})->where('nama','[A-Za-z]+');

Route::get('/index', function () {
echo "<a href='".route('create')."'>Akses Route Dengan Nama </a>"; });

Route::get('/create', function () {
echo "Route diakses menggunakan nama"; })->name('create');

Route::get('/hasil',function(){
    $title = 'layout Laravel';
    $tampilan = 'Membuat Layout Rio Anugrah Putra';
    return view('tampilan.hasil',compact('title','tampilan'));
});

Auth::routes(['verify'=> true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::group(['middleware' => ['logincheck:admin']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['logincheck:editor']], function () {
       Route::resource('editor', EditorController::class);
    });
});