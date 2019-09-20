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
Route::get('admin/permiso', 'Admin\PermisoController@index')->name('permiso');
Route::get('admin/permiso/crear', 'Admin\PermisoController@crear')->name('crear_permiso');
/*RUTAS DE MENU*/
Route::get('admin/menu', 'Admin\MenuController@index')->name('menu');
Route::post('admin/menu/guardar-orden', 'Admin\MenuController@GuardarOrden')->name('guardar-orden');

Route::post('admin/menu', 'Admin\MenuController@guardar')->name('guardar_menu');
Route::get('admin/menu/crear', 'Admin\MenuController@crear')->name('crear_menu');

Route::get('admin/menu/editar', 'Admin\MenuController@editar')->name('editar_menu');
Route::get('admin/menu/eliminar', 'Admin\MenuController@eliminar')->name('eliminar_menu');
/*RUTAS PARA ROL*/
Route::get('admin/rol', 'Admin\RolController@index')->name('rol');
Route::get('admin/rol/crear', 'Admin\RolController@crear')->name('crear_rol');
Route::post('admin/rol', 'Admin\RolController@guardar')->name('guardar_rol');
Route::get('admin/rol/{id}/editar', 'Admin\RolController@editar')->name('editar_rol');
Route::put('admin/rol/{id}', 'Admin\RolController@actualizar')->name('actualizar_rol');
Route::delete('admin/rol/{id}', 'Admin\RolController@eliminar')->name('eliminar_rol');
/*RUTAS DE MENU_ROL*/
Route::get('admin/menu-rol', 'Admin\MenuRolController@index')->name('menu_rol');
Route::post('admin/menu-rol', 'Admin\MenuRolController@guardar')->name('guardar_menus_rol');

// Route::group(['prefix' => 'admin','namespace'=> 'Admin'], function () {
//     Route::get('permiso', 'PermisoController@index')->name('permiso');
//     Route::get('permiso/crear', 'PermisoController@crear')->name('crear_permiso');
//     Route::get('menu', 'MenuController@index')->name('menu');
//     Route::get('menu/crear', 'MenuController@crear')->name('crear_menu');
//     Route::post('menu', 'MenuController@guardar')->name('guardar_menu');
// });
// Route::get('/', function () {
//     return view('welcomess');
// });

// route::get('permiso/{nombre}/{slug?}','PermisoController@index');

// route::get('admin/sistema/permiso','PermisoController@index')->name('permiso');

// Route::get('permiso/{nombre}', function ($nombre) {
//     return $nombre;
// })->where('nombre','[0-9]+')->name('permiso');