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
