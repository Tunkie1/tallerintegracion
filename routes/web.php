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
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('blogs','BlogController');
Route::get('/productosCliente', 'BlogController@indexCliente')->name('productosCliente');
Route::post('/updateUser/{id}', 'HomeController@updateUser')->name('updateUser');
Route::get('/editUser/{id}', 'HomeController@editUser')->name('editUser');
Route::get('/dudas', 'HomeController@formContacto')->name('dudas');
Route::post('/contacto', 'HomeController@contacto')->name('contacto');
Route::get('/getContactos', 'HomeController@getContactos')->name('getContactos');
Route::post('comprarProducto', 'BlogController@comprarProducto');
Route::get('/productosComprados', 'BlogController@productosComprados')->name('productosComprados');
Route::post('cambiarEstado', 'BlogController@cambiarEstado');