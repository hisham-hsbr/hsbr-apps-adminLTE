<?php

use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    //Bloods
    Route::get('/admin/masters/bloods', 'BloodController@index')->name('bloods.index');
    Route::get('/admin/masters/bloods/create', 'BloodController@create')->name('bloods.create');





    //Roles
    Route::get('/admin/users-management/roles', 'RoleController@index')->name('roles.index');
    Route::get('/admin/users-management/roles/create', 'RoleController@create')->name('roles.create');
    Route::get('/admin/users-management/roles/edit', 'RoleController@edit')->name('roles.edit');
    Route::post('/admin/users-management/roles/store', 'RoleController@store')->name('roles.store');
    Route::delete('/admin/users-management/roles/destroy', 'RoleController@destroy')->name('roles.destroy');

    //Permissions
    // Route::resource('admin/users-management/permissions', 'PermissionController');
    Route::get('/admin/users-management/permissions', 'PermissionController@index')->name('permissions.index');
    Route::get('/admin/users-management/permissions/create', 'PermissionController@create')->name('permissions.create');
    Route::get('/admin/users-management/permissions/edit', 'PermissionController@edit')->name('permissions.edit');
    Route::post('/admin/users-management/permissions/store', 'PermissionController@store')->name('permissions.store');
    Route::delete('/admin/users-management/permissions/', 'PermissionController@destroy')->name('permissions.destroy');
    Route::get('/admin/users-management/permissions/get', 'PermissionController@getPermissions')->name('get.permissions');

    //Users
    Route::get('/admin/masters/users', 'UserController@index')->name('users.index');
    Route::get('/admin/masters/users/create', 'UserController@create')->name('users.create');
    Route::post('/admin/masters/users/store', 'UserController@store')->name('users.store');
    Route::get('/admin/masters/users/get', 'UserController@getUsers')->name('get.users');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
