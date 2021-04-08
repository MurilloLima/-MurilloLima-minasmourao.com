<?php

Route::get('/', 'Site\HomeController@index')->name('site.index');
Route::get('/contatos', 'Site\HomeController@contato')->name('site.contato');
Route::get('/sobre-empresa', 'Site\HomeController@sobre')->name('site.sobre');
Route::get('/noticias', 'Site\HomeController@sobre')->name('site.noticias');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
