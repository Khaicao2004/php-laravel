<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public $bindings = [
          'App\Services\Interfaces\UserServiceInterface' => 'App\Services\UserService',
          'App\Repositories\Interfaces\UserRepositoryInterface' => 'App\Repositories\UserRepository',   
          'App\Repositories\Interfaces\ProvinceRepositoryInterface' => 'App\Repositories\ProvinceRepository',   
          'App\Repositories\Interfaces\DistrictRepositoryInterface' => 'App\Repositories\DistrictRepository'  
    ];
    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach($this->bindings as $key => $value){
            $this->app->bind($key,$value);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Paginator::useBootstrapFive();
    }
}
