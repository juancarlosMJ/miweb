<?php

use App\Http\Controllers\ArcoController;
use App\Http\Controllers\HistoriaController;
use App\Http\Controllers\PersonajesController;
use App\Http\Controllers\PruebasController;
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



Route::get('/', [PruebasController::class,'inicio']);
Route::get('/historia',[HistoriaController::class,'historia']);
Route::get('/personajes',[PersonajesController::class,'personajes']);
Route::get('/arco',[ArcoController::class,'arco']);
