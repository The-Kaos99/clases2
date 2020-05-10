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
Route::Resource("admin/profesores","ProfesoresController");
Route::Resource("admin/alumnos","AlumnosController");
Route::Resource("admin/padres","PadresController");