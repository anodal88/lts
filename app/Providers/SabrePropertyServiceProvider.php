<?php

namespace App\Providers;

use App\IntegrationHub\Contracts\IPropertyProvider;
use App\IntegrationHub\Vendors\Sabre\PropertyProxy;
use Illuminate\Foundation\Application;
use Auth;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\HttpFoundation\Request;

class SabrePropertyServiceProvider extends ServiceProvider
{

    public function __construct(Application $app){
        parent::__construct($app);
    }

    protected $defer=true;
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton(PropertyProxy::class, function ($app) {
            return new PropertyProxy(config('sabrehotel'));
        });

        //$this->app->bind(IPropertyProvider::class, PropertyProxy::class);
    }
}
