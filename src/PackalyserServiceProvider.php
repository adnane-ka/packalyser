<?php

namespace Adnane\Packalyser;

use Illuminate\Support\ServiceProvider;

class PackalyserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // 
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // views 
        $this->loadViewsFrom(__DIR__.'/resources/views', 'packalyser');

        // assets 
        if ($this->app->runningInConsole()) {
            // Publish assets
            $this->publishes([
              __DIR__.'/build' => public_path('packalyser'),
            ], 'assets');
        }

        // routes 
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
}
