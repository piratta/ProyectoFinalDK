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
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/admin', 'adminController@Index')->name('admin');
route::get('/adminUsuarios', 'adminController@getUser')->name('adminUsuarios');
route::get('/adminPagos', 'adminController@getPay')->name('adminPagos');
route::get('/adminCategorias', 'adminController@getCategorias')->name('adminCategorias');
route::get('/adminCuenta', 'adminController@getAcc')->name('adminCuenta');;


route::get('/pagos/{id}', 'pagosControllers@pagos');
route::get('/llogerTaquilles', 'pagosControllers@taquilla');
route::get('/reciclaje', 'pagosControllers@reciclaje');
route::get('/reciclajeAyuntamiento', 'pagosControllers@reciclajeAyuntamiento');

route::post('/borrarPago', 'borrarControllers@borrarPagament');
route::post('/borrarUser', 'borrarControllers@borrarUsuarios');
route::post('/borrarCat', 'borrarControllers@borrarCat');

route::post('/afegirCat', 'afegir@addCategoria');
route::post('/afegirConta', 'afegir@addConta');
route::post('/afegirPagament' , 'afegir@addPagos');
route::post('/afegirUser', 'afegir@addUser');

route::post('/modifyCat', 'modify@modifyCat');
route::post('/modifyPagos', 'modify@modifyPagos');



Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');