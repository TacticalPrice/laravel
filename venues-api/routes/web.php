<?php

use Illuminate\Support\Facades\Route;

Route::get('/venues', function () {
    return view('venues');
});

