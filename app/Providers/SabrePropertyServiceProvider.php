<?php

namespace App\Providers;

use App\IntegrationHub\Contracts\IPropertyProvider;
use App\IntegrationHub\Vendors\Sabre\SabrePropertyProxy;
use Illuminate\Foundation\Application;
use Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\HttpFoundation\Request;

class SabrePropertyServiceProvider extends ServiceProvider
{

    public function __construct(Application $app){
        parent::__construct($app);
    }


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

        $this->app->singleton(SabrePropertyProxy::class, function ($app) {
            $memcacheCache =Cache::store('memcached');
            $sabreLogger = Log::channel('sabre');
            return new SabrePropertyProxy(config('sabrehotel'),Auth::user(),$sabreLogger,$memcacheCache);
        });

        //$this->app->bind(IPropertyProvider::class, PropertyProxy::class);
    }
}
