<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [
    'uses' => 'CategoryController@index',
    'as' => 'categories'
]);
Route::get('/products/{id}', [
    'uses' => 'ProductController@index',
    'as' => 'products'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
