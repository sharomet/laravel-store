<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [
    'uses' => 'CategoryController@index',
    'as' => 'categories'
]);
Route::get('/category/{id}', [
    'uses' => 'CategoryController@show',
    'as' => 'category'
]);

Route::get('/product/{id}', [
    'uses' => 'ProductController@show',
    'as' => 'product'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
