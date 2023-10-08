<?php

Route::get('/admin/dashboard', function () {
    return view('back_end/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/default.php';  //default crms
