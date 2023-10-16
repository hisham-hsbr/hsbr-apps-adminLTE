<?php

use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    //Bloods
    Route::get('/admin/masters/bloods', 'BloodController@index')->name('bloods.index');
    Route::get('/admin/masters/bloods/create', 'BloodController@create')->name('bloods.create');





    //Roles
    Route::get('/admin/users-management/roles', 'RoleController@index')->name('roles.index');
    Route::get('/admin/users-management/roles/create', 'RoleController@create')->name('roles.create');
    Route::post('/admin/users-management/roles/store', 'RoleController@store')->name('roles.store');

    //Users
    Route::get('/admin/masters/users', 'UserController@index')->name('users.index');
    Route::get('/admin/masters/users/create', 'UserController@create')->name('users.create');
    Route::post('/admin/masters/users/store', 'UserController@store')->name('users.store');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
