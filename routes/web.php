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

use App\Http\Controllers\Admin\PermisoController;

Route::get('/', 'InicioController@index');
// Route::get('admin/permiso', 'Admin\PermisoController@index')->name('permiso');
Route::group(['prefix' => 'admin','namespace'=> 'Admin'], function () {
    Route::get('permiso', 'PermisoController@index')->name('permiso');
    Route::get('permiso/crear', 'PermisoController@crear')->name('crear_permiso');
});
// Route::get('/', function () {
//     return view('welcomess');
// });

// route::get('permiso/{nombre}/{slug?}','PermisoController@index');

// route::get('admin/sistema/permiso','PermisoController@index')->name('permiso');

// Route::get('permiso/{nombre}', function ($nombre) {
//     return $nombre;
// })->where('nombre','[0-9]+')->name('permiso');