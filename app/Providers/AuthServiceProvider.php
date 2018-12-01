<?php

namespace App\Providers;

use App\Policies\UserPolicy;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        //'App\Model' => 'App\Policies\ModelPolicy',
        User::class => UserPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //Passport
        Passport::routes();
        Passport::tokensExpireIn(now()->addDays(env('PASSPORT_ACCESS_TOKEN_LIFE_TIME_IN_DAYS'))); //Token Life time of 15 days
        Passport::refreshTokensExpireIn(now()->addDays(env('PASSPORT_REFRESH_TOKEN_LIFE_TIME_IN_DAYS'))); //Refresh token lifetime of 30 days
    }
}
