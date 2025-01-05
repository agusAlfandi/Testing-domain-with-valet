<?php

use Illuminate\Support\Facades\Route;

Route::domain('test.mymultisite.test')->group(function () {
    Route::get('/', function () {
        return "Halo test, xxxx";
    });
});
