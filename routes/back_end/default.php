<?php

use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    //Bloods
    Route::get('/admin/masters/bloods', 'BloodController@index')->name('bloods.index');
    Route::get('/admin/masters/bloods/create', 'BloodController@create')->name('bloods.create');





    //Roles
    Route::get('/admin/roles', 'RoleController@index')->name('roles.index');
    Route::get('/admin/roles/create', 'RoleController@create')->name('roles.create');
    Route::patch('/admin/roles/store', 'RoleController@create')->name('roles.store');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
