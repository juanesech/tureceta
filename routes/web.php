<?php

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/premium', function () {
    return view('premium');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/admin', function () {
    return view('admin');
});

//Route::get('/home', 'BuscarController@mostrar');

Route::get('/buscar', 'BuscarController@mostrar');

Route::post('/buscar','BuscarController@buscar');

Route::name('home.buscar')->post('home.buscar')->uses('BuscarController@buscar');

Route::resource('home','BuscarController');

Route::resource('adminIngredientes','ConfigController');

Route::resource('adminMedidas','AdminMedidasController');

Route::resource('adminRecetas','AdminRecetasController');

Route::resource('adminRecetaIngrediente','AdminRecetaIngredienteController');
