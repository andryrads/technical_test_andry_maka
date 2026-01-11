<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\UserRepositoryContract;
use App\Repositories\Eloquent\UserEloquent;
use App\Services\Contracts\UserServiceContract;
use App\Services\UseCases\UserService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

        //repos
        $this->app->bind(
            UserRepositoryContract::class,
            UserEloquent::class
        );

        //services
        $this->app->bind(
            UserServiceContract::class,
            UserService::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
