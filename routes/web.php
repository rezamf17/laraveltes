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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/mahasiswa', 'MahasiswaController@index');

//student
// Route::get('/student', 'StudentsController@index');
// Route::get('/student/create', 'StudentsController@create');
// Route::get('/student/{student}', 'StudentsController@show');
// Route::post('/student', 'StudentsController@store');
// Route::delete('/student/{student}', 'StudentsController@destroy');
// Route::get('/student/{student}/edit', 'StudentsController@edit');
// Route::patch('/student/{student}', 'StudentsController@update');
Route::resource('student', 'StudentsController');
