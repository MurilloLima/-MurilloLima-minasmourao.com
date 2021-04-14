<?php


Route::get('/', 'Site\HomeController@index')->name('site.index');

//Panel
Route::group(['prefix' => 'panel', 'middleware' => ['auth']], function () {
    Route::get('/', 'Panel\Admin\HomeController@index')->name('panel.admin.index');

    //Slider
    Route::get('slider/', 'Panel\Admin\SliderController@index')->name('admin.slider.index');
    Route::get('slider/create', 'Panel\Admin\SliderController@create')->name('admin.slider.create');
    Route::post('slider/', 'Panel\Admin\SliderController@store')->name('admin.slider.store');
    Route::get('slider/edit/{id}', 'Panel\Admin\SliderController@edit')->name('admin.slider.edit');
    Route::post('slider/update/{id}', 'Panel\Admin\SliderController@update')->name('admin.slider.update');
    Route::get('slider/delete/{id}', 'Panel\Admin\SliderController@delete')->name('admin.slider.delete');

    //Noticias 
    Route::get('noticias/', 'Panel\Admin\NoticiasController@index')->name('admin.noticias.index');
    Route::get('noticia/create/', 'Panel\Admin\NoticiasController@create')->name('admin.noticia.create');
    Route::post('noticia/', 'Panel\Admin\NoticiasController@store')->name('admin.noticia.store');
    Route::get('noticia/edit/{id}', 'Panel\Admin\NoticiasController@edit')->name('admin.noticia.edit');
    Route::post('noticia/update/{id}', 'Panel\Admin\NoticiasController@update')->name('admin.noticia.update');
    Route::get('noticia/delete/{id}', 'Panel\Admin\NoticiasController@delete')->name('admin.noticia.delete');

});
Auth::routes();
