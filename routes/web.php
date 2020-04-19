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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => 'jalurs'], function() {
  Route::get('/', 'JalurController@index');
  Route::match(['get', 'post'], 'create', 'JalurController@create');
  Route::match(['get', 'put'], 'update/{id}', 'JalurController@update');
  Route::get('show/{id}', 'JalurController@show');
  Route::delete('delete/{id}', 'JalurController@destroy');
});

Route::group(['prefix' => 'perlengkapans'], function() {
  Route::get('/', 'PerlengkapanController@index');
  Route::match(['get', 'post'], 'create', 'PerlengkapanController@create');
  Route::match(['get', 'put'], 'update/{id}', 'PerlengkapanController@update');
  Route::get('show/{id}', 'PerlengkapanController@show');
  Route::delete('delete/{id}', 'PerlengkapanController@destroy');

});
Route::group(['prefix' => 'regus'], function() {
  Route::get('/', 'ReguController@index');
  Route::match(['get', 'post'], 'create', 'ReguController@create');
  Route::match(['get', 'put'], 'update/{id}', 'ReguController@update');
  Route::get('show/{id}', 'ReguController@show');
  Route::delete('delete/{id}', 'ReguController@destroy');
});


Route::get('/', 'DakiController@index');
Route::get('/search','DakiController@search');
Route::delete('/deleteall', 'DakiController@deleteAll');
Route::resource('daki','DakiController');


Route::get('/', 'ProcessController@indexlogin');

//show view homepage form
Route::get('/home', 'ProcessController@homepage');

//PROCESS CONTROLLER
//insert data
Route::post('/home', 'ProcessController@store');

//delete data
Route::post('/view', 'ProcessController@destroy');

//List all data 
Route::get('/view', 'ProcessController@index');

//search data
Route::get('/search', 'ProcessController@show');

// edit and update data
Route::get('/edit/{id}', 'ProcessController@edit');

Route::post('/update', 'ProcessController@update');

// Auth routes, login, register, forgot pass
Auth::routes();
