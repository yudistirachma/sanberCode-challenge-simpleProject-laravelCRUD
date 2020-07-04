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

Route::view('/', 'home');
Route::get('/pertanyaan', 'PertanyaanController@index');
route::get('/pertanyaan/create', 'Pertanyaancontroller@create');
route::post('/pertanyaan', 'Pertanyaancontroller@store');
route::get('/pertanyaan/{id}', 'Pertanyaancontroller@detail');
route::get('/pertanyaan/{id}/edit', 'Pertanyaancontroller@edit');
route::put('/pertanyaan/{id}', 'Pertanyaancontroller@update');
route::delete('/pertanyaan/{id}', 'Pertanyaancontroller@delete');

Route::get('jawaban/{id}', 'jawabanController@index');
Route::post('jawaban/{id}', 'JawabanController@store');
