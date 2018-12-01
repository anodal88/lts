<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use JMS\Serializer\Exclusion\ExpressionLanguageExclusionStrategy;
use JMS\Serializer\Expression\ExpressionEvaluator;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

class JmsSerializerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Serializer::class, function ($app) {
            /** @var \Illuminate\Config\Repository $config */
            $config = $app->make('Illuminate\Config\Repository');
            return SerializerBuilder
                ::create()
                ->setCacheDir(storage_path('cache/serializer'))
                ->setDebug($config->get('app.debug'))
                ->setSerializationContextFactory(function () {
                    return SerializationContext::create()
                        ->setSerializeNull(true)
                        ;
                })
                ->build()
                ;
        });
    }

    public function provides()
    {
        return ['serializer'];
    }
}
