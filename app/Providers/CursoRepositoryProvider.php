<?php

namespace Curso\Providers;

use Illuminate\Support\ServiceProvider;

class CursoRepositoryProvider extends ServiceProvider
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
        $this->app->bind(
            \Curso\Repositories\ClientRepository::class, 
            \Curso\Repositories\ClientRepositoryEloquent::class
        );

        $this->app->bind(
            \Curso\Repositories\ProjectRepository::class, 
            \Curso\Repositories\ProjectRepositoryEloquent::class
        );
    }
}
