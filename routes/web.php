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
Route::get('/professorat_update', 'ProfController@update');
Route::get('/admin', 'adminController@Index');
route::get('/adminUsuarios', 'adminController@getUser');
route::get('/adminPagos', 'adminController@getPay');
route::get('/adminCategorias', 'adminController@getCategorias');
route::get('/pagos/{id}', 'pagosControllers@pagos');
route::get('/llogerTaquilles', 'pagosControllers@taquilla');
route::get('/reciclaje', 'pagosControllers@reciclaje');
route::get('/reciclajeAyuntamiento', 'pagosControllers@reciclajeAyuntamiento');
route::post('/borrar', 'borrarControllers@borrarUsuarios');