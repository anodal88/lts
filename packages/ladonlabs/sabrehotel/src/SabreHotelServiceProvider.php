<?php

namespace ladonlabs\sabrehotel;

use Illuminate\Support\ServiceProvider;


class SabreHotelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/config.php' => config_path('sabrehotel.php')
        ], 'config');

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Bind 'sabre.hotel' shared component to the IoC container
        $this->app->singleton('sabre.hotel', function ($app) {
            return new SabrePropertyProxy(config('sabrehotel'));
        });



    }


}
