<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SingerController;
use App\Http\Controllers\SongController;

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

Route::get('add-singer',[SingerController::class,'add_singer']);
Route::get('add-song',[SongController::class,'add_song']);
Route::get('show-song/{id}',[SongController::class,'show_song']);
Route::get('show-singer/{id}',[SingerController::class,'show_singer']);

