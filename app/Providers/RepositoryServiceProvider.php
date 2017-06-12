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
        $this->app->bind(\SON\Repositories\QuestionRepository::class, \SON\Repositories\QuestionRepositoryEloquent::class);
        $this->app->bind(\SON\Repositories\LanguageRepository::class, \SON\Repositories\LanguageRepositoryEloquent::class);
        //:end-bindings:
    }
}
