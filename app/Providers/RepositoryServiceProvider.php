<?php

namespace App\Providers;

use App\Repositories\CompanyRepositoryInterface;
use App\Repositories\Eloquent\CompanyRepository;
use App\Repositories\Eloquent\GalleryRepository;
use App\Repositories\Eloquent\MenuRepository;
use App\Repositories\Eloquent\MetaRepository;
use App\Repositories\Eloquent\PostRepository;
use App\Repositories\Eloquent\UserRepository;
use App\Repositories\GalleryRepositoryInterface;
use App\Repositories\MenuRepositoryInterface;
use App\Repositories\MetaRepositoryInterface;
use App\Repositories\PostRepositoryInterface;
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
        $this->app->bind(MenuRepositoryInterface::class,MenuRepository::class);
        $this->app->bind(PostRepositoryInterface::class,PostRepository::class);
        $this->app->bind(MetaRepositoryInterface::class,MetaRepository::class);
        $this->app->bind(CompanyRepositoryInterface::class,CompanyRepository::class);
    }
}
