<?php

use Illuminate\Support\Facades\Route;

    //Price List
    Route::get('/admin/price-lists', 'PriceListController@index')->name('priceLists.index');
    Route::get('/admin/price-lists/create', 'PriceListController@create')->name('priceLists.create');
    Route::get('/admin/price-lists/edit/{id}', 'PriceListController@edit')->name('priceLists.edit');
    Route::patch('/admin/price-lists/update/{id}', 'PriceListController@update')->name('priceLists.update');
    Route::post('/admin/price-lists/store', 'PriceListController@store')->name('priceLists.store');
    Route::get('/admin/price-lists/get', 'PriceListController@getPriceLists')->name('get.priceLists');


require __DIR__.'/default.php';  //default crms
