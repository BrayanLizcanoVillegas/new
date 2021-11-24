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
    return view('inicio');
});

Route::get('/usuarios', function () {
    return view('usuario');
});

Route::get('/refrigeracion', function () {
    return view('refrigeracion');
});

Route::get('/contactenos', function () {
    return view('contactenos');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuarios', 'FormularioController@index2')->name('usuarios');

Route::post('/formulario', 'FormularioController@store')->name('store');
Route::post('/usuarios', 'UsuariosController@store')->name('store');
Route::get('/formulario', 'FormularioController@index')->name('formulario');
Route::get('/usuarios', 'UsuariosController@index')->name('usuarios');

Route::get('editar/{id}' , 'FormularioController@edit')->name('editar');
Route::put('/update/{id}' , 'FormularioController@update')->name('update');
Route::delete('/eliminar/{id}', 'FormularioController@destroy')->name('eliminar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
