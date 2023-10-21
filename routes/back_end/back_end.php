<?php

Route::get('/admin/dashboard', 'BackendDashboardController@index')->name('back-end.dashboard');
Route::get('/admin/dashboard/users', 'BackendDashboardController@fetchUsers')->name('fetch.users');


require __DIR__.'/default.php';  //default crms
