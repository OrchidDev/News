<?php

use Illuminate\Support\Facades\Route;
use OrchidDev\Home\Http\Controllers\HomeController;

Route::group([], function ($router) {
    Route::get('/', [HomeController::class, 'index']);
});
