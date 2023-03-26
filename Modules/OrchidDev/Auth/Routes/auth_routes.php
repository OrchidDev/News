<?php

use Illuminate\Support\Facades\Route;
use OrchidDev\Auth\Http\Controllers\LoginControllter;
use OrchidDev\Auth\Http\Controllers\RegisterControllter;
use OrchidDev\Auth\Http\Controllers\ResetController;
use OrchidDev\Auth\Http\Controllers\VerifyController;

Route::group([], function ($router){

    // عضویت

    $router->get('register', [RegisterControllter::class, 'view'])->name('auth.register');
    $router->post('register', [RegisterControllter::class, 'register'])->name('auth.register.store');

    // ورود

    $router->get('login', [LoginControllter::class, 'view'])->name('auth.login');
    $router->post('login', [LoginControllter::class, 'login'])->name('auth.login.store');

    // تایید ایمیل

    $router->get('/email/verify', [VerifyController::class, 'view'])->name('auth.verify.email')->middleware('auth');
    $router->get('/email/verify/{id}/{hash}', [VerifyController::class, 'verify'])->name('verification.verify')->middleware(['auth', 'signed']);
    $router->post('/email/verify/resend', [VerifyController::class, 'resend'])->name('verify.resend')->middleware(['auth', 'throttle:5,1']);

    // بازیابی رمز عبور

    $router->get('password/reset', [ResetController::class, 'view'])->name('auth.password.reset')->middleware('guest');
    $router->post('password/send-email', [ResetController::class, 'sendEmail'])->name('password.reset')->middleware('guest');
});

