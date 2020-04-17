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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/features', function () {
//     return view('features');
// });
// Route::get('/test', function () {
//     $nama_halaman = 'pricing page baru';
//     return view('test', ['nama_halaman' => $nama_halaman]);
// });

Route::get('/','PagesController@Index');
Route::get('/features','PagesController@features');
Route::get('/test','PagesController@price');
Route::get('/mahasiswa','MahasiswaController@index');

Route::get('/students', 'StudentsController@index');
Route::get('/students/create', 'StudentsController@create');
Route::get('/students/{student}', 'StudentsController@show');
Route::post('/students', 'StudentsController@store');