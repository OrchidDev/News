<?php

use Illuminate\Support\Facades\Route;
use OrchidDev\Auth\Http\Controllers\LoginControllter;
use OrchidDev\Auth\Http\Controllers\RegisterControllter;

Route::group([], function ($router){

    // عضویت

    $router->get('register', [RegisterControllter::class, 'view'])->name('auth.register');
    $router->post('register', [RegisterControllter::class, 'register'])->name('auth.register.store');

    // ورود

    $router->get('login', [LoginControllter::class, 'view'])->name('auth.login');
    $router->post('login', [LoginControllter::class, 'login'])->name('auth.login.store');

});
