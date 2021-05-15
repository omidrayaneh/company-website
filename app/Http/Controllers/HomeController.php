<?php

namespace App\Http\Controllers;

use App\Repositories\Eloquent\GalleryRepository;
use App\Repositories\Eloquent\MetaRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{

    /**
     * @var MetaRepository
     */
    private $meta;
    /**
     * @var GalleryRepository
     */
    private $photo;

    public function __construct(MetaRepository $meta, GalleryRepository $photo)
    {

        $this->meta = $meta;
        $this->photo = $photo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($locate = null)
    {
//        if ($locate == null){
//            App::setLocale('fa');
//        }elseif($locate=='tr')
//            App::setLocale('tr');
//        elseif ($locate == 'en')
//            App::setLocale('en');
        $serviceBanner = $this->photo->getAllBanner(__('serviceBanner'));
        $employeeBanner = $this->photo->getAllBanner(__('employeeBanner'));
        $mainBanner = $this->photo->getBanner(__('mainBanner'));
        $experienceBanner = $this->photo->getBanner(__('experienceBanner'));
        $mainBackground = $this->photo->getBanner(__('mainBackground'));
        $meta = $this->meta->getFirstActiveMeta();
        return view('index', compact(['meta', 'mainBanner', 'experienceBanner', 'mainBackground', 'serviceBanner', 'employeeBanner']));
    }
}
