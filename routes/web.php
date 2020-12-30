<?php

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

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('project/',[App\Http\Controllers\LokasiController::class,'index'])->name('project:list');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/project', [App\Http\Controllers\LokasiController::class, 'index'])->name('lokasi:list');

Route::get('/project/create',[App\Http\Controllers\LokasiController::class,'create'])->name('lokasi:create');
Route::post('/project/create',[App\Http\Controllers\LokasiController::class,'store']);

Route::get('/project/{lokasi}',[App\Http\Controllers\LokasiController::class,'show'])->name('lokasi:show');

//Route::get('/project/{lokasi}/edit',[App\Http\Controllers\LokasiController::class,'edit'])->name('lokasi:edit');
//Route::post('/project/{lokasi}/edit',[App\Http\Controllers\LokasiController::class,'update'])->name('lokasi:update');

Route::get('/project/{lokasi}/force-delete',[App\Http\Controllers\LokasiController::class,'forceDelete'])->name('lokasi:forceDelete');