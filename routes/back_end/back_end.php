<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin/dashboard', 'BackendDashboardController@index')->middleware(['auth', 'verified'])->name('back-end.dashboard');
Route::get('/admin/dashboard/users', 'BackendDashboardController@fetchUsers')->name('fetch.users');


require __DIR__.'/default.php';  //default CRUD
require __DIR__.'/price_list.php';  //Price List CRUD
