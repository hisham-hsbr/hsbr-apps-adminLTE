<?php

use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {

    //App Settings
    Route::controller('DeveloperSettingsController')->prefix('/developer/settings/app-settings')->name('app-settings.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::patch('/update', 'update')->name('update');
    });

    //App Settings
    Route::controller('AdminSettingsController')->prefix('/admin/settings/admin-settings')->name('admin-settings.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::patch('/update', 'update')->name('update');
    });


});
