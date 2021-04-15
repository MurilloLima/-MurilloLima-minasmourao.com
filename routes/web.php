<?php

Route::get('/', 'Site\HomeController@index')->name('site.index');
Route::get('sobre-a-empresa/', 'Site\HomeController@empresa')->name('site.empresa');
Route::get('sobre-a-madeira/', 'Site\HomeController@madeira')->name('site.madeira');
Route::get('sobre-o-tratamento/', 'Site\HomeController@tratamento')->name('site.tratamento');
Route::get('aplicacoes/', 'Site\HomeController@aplicacoes')->name('site.aplicacoes');
Route::get('orcamentos/', 'Site\HomeController@orcamentos')->name('site.orcamentos');
Route::get('produtos/', 'Site\HomeController@produtos')->name('site.produtos');
Route::get('noticias/', 'Site\HomeController@noticias')->name('site.noticias');
Route::get('contatos/{slug}', 'Site\HomeController@noticiaDetalhes')->name('site.noticia.noticiaDetalhes');
Route::get('contatos/', 'Site\HomeController@contatos')->name('site.contatos');

//Panel
Route::group(['prefix' => 'panel', 'middleware' => ['auth']], function () {
    Route::get('/', 'Panel\Admin\HomeController@index')->name('panel.admin.index');

    //orçamentos
    Route::get('orcamentos/', 'Panel\Admin\OrcamentoController@index')->name('admin.orcamentos.index');

    //produtos
    Route::get('produtos/', 'Panel\Admin\ProdutosController@index')->name('admin.produtos.index');
    Route::get('produto/create/', 'Panel\Admin\ProdutosController@create')->name('admin.produto.create');
    Route::post('produto/', 'Panel\Admin\ProdutosController@store')->name('admin.produto.store');
    Route::get('produto/edit/{id}', 'Panel\Admin\ProdutosController@edit')->name('admin.produto.edit');
    Route::post('produto/update/{id}', 'Panel\Admin\ProdutosController@update')->name('admin.produto.update');
    Route::get('produto/delete/{id}', 'Panel\Admin\ProdutosController@delete')->name('admin.produto.delete');

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
