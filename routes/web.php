<?php


Route::get('/', 'Site\HomeController@index')->name('site.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
