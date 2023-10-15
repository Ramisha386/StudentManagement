<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/main', function () {
//     return view ('welcome');
// });
//
// Route::get('/test', 'App\Http\Controllers\TestController@test');
Route::get('/', 'App\Http\Controllers\StudentController@index')->name('index');
Route::get('/create', 'App\Http\Controllers\StudentController@create')->name('create');
Route::get('/edit/{id}', 'App\Http\Controllers\StudentController@edit')->name('edit');
Route::post('/store', 'App\Http\Controllers\StudentController@store')->name('store');
Route::post('/update/{id}', 'App\Http\Controllers\StudentController@update')->name('update');
Route::post('/delete/{id}', 'App\Http\Controllers\StudentController@delete')->name('delete');
