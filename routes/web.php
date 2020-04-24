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

Route::get('/','pagesController@getHome' );
Route::get('/about','pagesController@getAbout' );
Route::get('/contact','pagesController@getContact' );

Route::post('contact/submit','MessagesController@submit');

Route::get('messages','MessagesController@getMessages');
