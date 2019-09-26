<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [
    'uses' => 'CategoryController@index',
    'as' => 'categories'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
