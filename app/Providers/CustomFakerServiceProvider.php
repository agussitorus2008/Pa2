<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Faker\Factory;

class CustomFakerServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('customFaker', function ($app) {
            return require_once app_path('CustomFaker.php');
        });
    }
}
