<?php

namespace DibVendor\MyCalculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Calculator::class, function ($app) {
            return new Calculator();
        });
    }

    public function boot()
    {
        
    }
}

