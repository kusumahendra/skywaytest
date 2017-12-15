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
Route::get('/', 'MainController@index');
Route::post('/test-1', 'MainController@testOneWorker');
Route::post('/test-2', 'MainController@testTwoWorker');
Route::post('/test-3', 'MainController@testThreeWorker');
