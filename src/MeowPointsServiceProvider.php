<?php

namespace AhmedTofaha\MeowPoints;

use Illuminate\Support\ServiceProvider;

class MeowPointsServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register a class in the service container
        $this->app->bind('meow_points', function ($app) {
            return new MeowPoints();
        });
//        $this->mergeConfigFrom(__DIR__.'/../config/meow-points.php', 'meow-points');
    }
    public function boot()
    {
        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__.'/../config/meow-points.php' => config_path('meow-points.php'),
            ], 'config');
            $this->publishes([
                __DIR__ . '/../database/migrations/create_meow_points_table.php' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_points_table.php'),
                // you can add any number of migrations here
            ], 'migrations');
        }
    }

}
