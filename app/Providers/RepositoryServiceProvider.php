<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind(\App\Repositories\UserEntityRepository::class, \App\Repositories\UserEntityRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\UserRepository::class, \App\Repositories\UserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\InstituicaoRepository::class, \App\Repositories\InstituicaoRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\InstituitionRepository::class, \App\Repositories\InstituitionRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\GroupRepository::class, \App\Repositories\GroupRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PostsRepository::class, \App\Repositories\PostsRepositoryEloquent::class);
        //:end-bindings:
    }
}
