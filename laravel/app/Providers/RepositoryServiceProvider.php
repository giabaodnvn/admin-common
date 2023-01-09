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
        $this->app->bind(\App\Repositories\Interfaces\GroupRepository::class, \App\Repositories\Eloquents\GroupRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Interfaces\EmployeeRepository::class, \App\Repositories\Eloquents\EmployeeRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Interfaces\PositionRepository::class, \App\Repositories\Eloquents\PositionRepositoryEloquent::class);
        //:end-bindings:
    }
}
