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

Route::get('/', 'LinkController@home')->name('home');

Route::get('/login', 'UsersController@login')->name('login');
Route::post('/login','UsersController@store')->name('login');
Route::get('/admin', 'UsersController@admin')->name('admin');
Route::get('/logout', 'UsersController@destroy')->name('logout');

Route::get('/links', 'LinkController@index')->name('links');
Route::post('/link/{link}', 'LinkController@edit')->name('link_edit');
Route::patch('/link/{link}', 'LinkController@update')->name('link_update');

Route::get('/upload', 'UploadController@index')->name('picture');
Route::post('/upload/file', 'UploadController@uploadFile')->name('upload');
Route::delete('/upload/file', 'UploadController@deleteFile');

Route::get('/feature', 'FeatureController@index')->name('feature');
Route::get('/fea_create', 'FeatureController@create')->name('fea_create');
Route::get('/fea/{fea}', 'FeatureController@show')->name('fea_show');
Route::post('/fea/{fea}', 'FeatureController@edit')->name('fea_edit');
Route::patch('/fea/{fea}', 'FeatureController@update')->name('fea_update');
Route::post('/fea_create', 'FeatureController@store')->name('fea_store');
Route::delete('/fea/{fea}', 'FeatureController@destroy')->name('fea_delete');