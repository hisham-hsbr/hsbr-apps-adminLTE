<?php

Route::get('/admin/dashboard', function () {
    return view('back_end/dashboard');
})->middleware(['auth', 'verified'])->name('back-end.dashboard');


require __DIR__.'/default.php';  //default crms
