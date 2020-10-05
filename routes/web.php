<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArbitroController;

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

	Route::view('/','home')->name('home');
	Route::get('/Login', [ArbitroController::class, 'index'])->name('RIniciarSesion');
	Route::post('/Logeo', [ArbitroController::class, 'show'])->name('Riniciar');

	//ruta de enlace de registro-direccion entrada-direccion salida-nombre identificador 
	Route::view('/Registro','Registro')->name('Registro');
	//cuando se realiza un post- direccion from post- controlador a ejecutar con su funcion
	Route::post('Registro','App\Http\Controllers\ArbitroController@create');
