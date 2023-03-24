<?php

use Illuminate\Support\Facades\Route;
use OrchidDev\Auth\Http\Controllers\RegisterControllter;

Route::group([], function ($router){
    $router->get('register', [RegisterControllter::class, 'view'])->name('auth.register');
    $router->post('register', [RegisterControllter::class, 'register'])->name('auth.register.store');
});
