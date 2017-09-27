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
Route::get('/', 'ProjectController@index')->name('home');

Auth::routes();

Route::get('/overview', 'ProjectController@index');
Route::get('/project/new', 'ProjectController@createForm')->middleware('auth');
Route::post('/project/new', 'ProjectController@create')->middleware('auth');


