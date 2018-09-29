<?php

namespace App\Providers;

use App\Servises\Calculator\Calculator;
use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('math', function ($app){
            return new Calculator($app);
        });
    }
}
