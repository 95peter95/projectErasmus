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

Route::get('/', 'MobilityController@index')->name('homepage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/form', 'FormController@index')->name('form');
Route::post('/form', 'FormController@insertReview')->name('form');

Route::get('/contact', 'ContactController@index')->name('contact');
