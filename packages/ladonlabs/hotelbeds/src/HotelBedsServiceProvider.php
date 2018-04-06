<?php

namespace ladonlabs\hotelbeds;

use Illuminate\Support\ServiceProvider;


class HotelBedsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/config.php' => config_path('hotelbeds.php')
        ], 'config');

        $this->loadMigrationsFrom(__DIR__.'/migrations');


    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Bind 'sabre.hotel' shared component to the IoC container
        $this->app->singleton('hotelbeds', function ($app) {
            return new HotelBedsProxy(config('hotelbeds'));
        });



    }


}
