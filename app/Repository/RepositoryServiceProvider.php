<?php

namespace App\Repository;

use App\Repository\address\district\DistrictCacheRepositoryInterface;
use App\Repository\address\district\DistrictRepository;
use App\Repository\address\district\DistrictRepositoryInterface;
use App\Repository\user\UserRepository;
use App\Repository\user\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends  ServiceProvider
{
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->singleton(DistrictRepositoryInterface::class, DistrictRepository::class);
        $this->app->singleton(DistrictCacheRepositoryInterface::class, DistrictRepository::class);

        $this->app->singleton('test1', TestClass::class);
        $this->app->bind('test2', TestClass::class);


    }
}
