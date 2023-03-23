<?php

namespace OrchidDev\Home\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class HomeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views', 'Home');
//        $this->loadRoutesFrom();
        Route::middleware('web')->namespace('OrchidDev/Home/Http/Controllers')->group(__DIR__ . '/../Routes/home_routes.php');
    }

    public function boot()
    {
        //
    }
}
