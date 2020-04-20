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

Route::get('/', 'InicioController@index');
Route::get('/primeros_pasos', 'InicioController@primeros_pasos');
Route::get('admin', 'AdministracionController@index');
//Route::get('admin/profesores', 'AdministracionController@Profesores');
Route::get('admin/alumnos', 'AdministracionController@Alumnos');
Route::get('admin/padres', 'AdministracionController@Padres');
Route::Resource("admin/profesores","ProfesoresController");