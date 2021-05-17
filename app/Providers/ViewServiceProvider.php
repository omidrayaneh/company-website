<?php

namespace App\Providers;

use App\Company;
use App\Menu;
use App\Photo;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
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
        View::composer('layouts.parts.*',function($view){
            $logo= Photo::where([['status',1],['place' , __('logo')]] )->first();
            $menus=  Menu::with(['childrenRecursive','posts'])
                ->where('parent_id', null)
                ->get();
            $view->with('logo',$logo);
            $view->with('menus',$menus);
        });
        View::composer('*',function($view){
            $company= Company::where('status',1)->first();
            $view->with('company',$company);
        });
    }
}
