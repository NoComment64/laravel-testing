<?php

use Illuminate\Support\Facades\Route;

Route::get('/one', function () {
    return view('welcome');
});
