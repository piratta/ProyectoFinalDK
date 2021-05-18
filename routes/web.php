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

/**
 * Ruta para la página de pagos
 */
route::get('/pagos/{id}', 'pagosControllers@pagos');

/*
*Rutas borrado para las tablas
*/
route::post('/borrarPago', 'borrarControllers@borrarPagament');
route::post('/borrarUser', 'borrarControllers@borrarUsuarios');
route::post('/borrarCat', 'borrarControllers@borrarCat');
route::post('/borrarAcc', 'borrarControllers@borrarAcc');

/*
*Rutas para añadir a las tablas de administración
 */

route::post('/afegirCat', 'afegir@addCategoria');
route::post('/afegirConta', 'afegir@addConta');
route::post('/afegirPagament' , 'afegir@addPagos');
route::post('/afegirUser', 'afegir@addUser');
/*
*Rutas modificación de las tablas de administración
 */
route::post('/modifyCat', 'modify@modifyCat');
route::post('/modifyPagos', 'modify@modifyPagos');
route::post('/modifyUsers', 'modify@modifyUser');
route::post('/modifyAccs', 'modify@modifyAccs');

/**
 * Rutas de google Login
 */
Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');