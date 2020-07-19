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
Route::get('/habitacion', function () {
    return view('habitacion');
});
Route::get('/eventos', function () {
    return view('eventos');
});
Route::get('/fitnessclub', function () {
    return view('fitnessclub');
});
Route::get('/promociones', function () {
    return view('promociones');
});
Route::get('/restaurant', function () {
    return view('restaurant');
});
Route::get('/principaladmin', function () {
    return view('principaladmin');
});
Route::get('/habitacionesin/cinco', function () {
    return view('/habitacionesin/cinco');
});
Route::get('/habitacionesin/cuatro', function () {
    return view('/habitacionesin/cuatro');
});
Route::get('/habitacionesin/uno', function () {
    return view('/habitacionesin/uno');
});
Route::get('/habitacionesin/dos', function () {
    return view('/habitacionesin/dos');
});
Route::get('/habitacionesin/tres', function () {
    return view('/habitacionesin/tres');
});

Route::resource('/administrador','administradorController');
Route::resource('/cliente','ClienteController');
Route::resource('/cotizacion','cotizacionController');
Route::resource('/est_revs','est_resvsController');
Route::resource('/habitaciones','habitacionesController');
Route::resource('/reservas','reservasController');
Route::resource('/servicios','serviciosController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
