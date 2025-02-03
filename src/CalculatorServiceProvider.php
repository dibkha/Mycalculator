<?php

namespace DibVendor\MyCalculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    public function register()
    {
        

       
    }

    public function boot()
    {
       // Loading views, migrations, routes, etc.

        // Loading views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'mycalculator');

        // If you have routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}

