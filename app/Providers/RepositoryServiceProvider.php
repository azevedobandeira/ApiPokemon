<?php

namespace SON\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\SON\Repositories\UserRepository::class, \SON\Repositories\UserRepositoryEloquent::class);
        $this->app->bind(\SON\Repositories\PokemonsRepository::class, \SON\Repositories\PokemonsRepositoryEloquent::class);
        //:end-bindings:
    }
}
