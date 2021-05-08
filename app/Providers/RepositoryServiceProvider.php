<?php

namespace App\Providers;

use App\Repositories\Eloquent\GalleryRepository;
use App\Repositories\Eloquent\UserRepository;
use App\Repositories\GalleryRepositoryInterface;
use App\Repositories\UserRepositoryInterface;
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
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(UserRepositoryInterface::class,UserRepository::class);
        $this->app->bind(GalleryRepositoryInterface::class,GalleryRepository::class);
    }
}
