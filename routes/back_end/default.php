<?php

use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {

    //Roles
    Route::controller('RoleController')->prefix('/admin/users-management/roles')->name('roles.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::patch('/update/{id}', 'update')->name('update');
        Route::post('/store', 'store')->name('store');
        Route::delete('/destroy', 'destroy')->name('destroy');
    });

    //Permissions
    Route::controller('PermissionController')->prefix('/admin/users-management/permissions')->name('permissions.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::patch('/update/{id}', 'update')->name('update');
        Route::post('/store', 'store')->name('store');
        Route::delete('/destroy{id}', 'destroy')->name('destroy');
        Route::get('/get', 'permissionsGet')->name('get');
    });

    //Users
    Route::controller('UserController')->prefix('/admin/masters/users')->name('users.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::patch('/update/{id}', 'update')->name('update');
        Route::post('/store', 'store')->name('store');
        Route::delete('/destroy', 'destroy')->name('destroy');
        Route::get('/get', 'usersGet')->name('get');
        Route::post('/csdc/get', 'csdcsGet')->name('csdcs.get');
    });

    //activity-logs
    Route::controller('ActivitylogController')->prefix('/admin/users-management/activity-logs')->name('activityLogs.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/get', 'activityLogsGet')->name('get');
    });

    //Bloods
    Route::controller('BloodController')->prefix('/admin/masters/bloods')->name('bloods.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::patch('/update/{id}', 'update')->name('update');
        Route::post('/store', 'store')->name('store');
        Route::delete('/destroy', 'destroy')->name('destroy');
        Route::get('/get', 'bloodsGet')->name('get');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
