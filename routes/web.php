<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', [
    'as' => '/',
    'uses' => 'PagesController@getIndex'
]);

Route::get('about', [
    'as' => 'about',
    'uses' => 'PagesController@getAbout'
]);

Route::get('contact', [
    'as' => 'contact',
    'uses' => 'PagesController@getContact'
]);

Route::get('help', [
    'as' => 'help',
    'uses' => 'PagesController@getHelp'
]);

Route::get('productindex', [
    'as' => 'productindex',
    'uses' => 'ProductController@index'
]);

Route::resource('product','ProductController');
