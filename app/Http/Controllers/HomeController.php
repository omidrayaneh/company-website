<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($locate = null)
    {
        if ($locate == null){
            App::setLocale('fa');
        }elseif($locate=='tr')
            App::setLocale('tr');
        elseif ($locate == 'en')
            App::setLocale('en');
        return view('index');
    }
}
