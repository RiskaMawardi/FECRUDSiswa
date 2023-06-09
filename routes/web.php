<?php

use App\Http\Controllers\SiswaController;
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


    //get data siswa
    Route::get('/',[SiswaController::class,'index']);

    //ngarahin ke halaman create
    Route::get('/siswa/create',[SiswaController::class,'create']);

    //methode yg digunakan pada halaman create
    Route::post('/siswa/create',[SiswaController::class,'store']);

    //ngarahin ke tampilan edit
    Route::get('/edit/{id_siswa}',[SiswaController::class,'edit']);

    //update data
    Route::put('/update/{id_siswa}',[SiswaController::class,'update']);