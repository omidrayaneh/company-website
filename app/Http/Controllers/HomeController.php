<?php

namespace App\Http\Controllers;

use App\Repositories\Eloquent\GalleryRepository;
use App\Repositories\Eloquent\MenuRepository;
use App\Repositories\Eloquent\MetaRepository;
use App\Repositories\Eloquent\PostRepository;
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
    /**
     * @var PostRepository
     */
    private $post;

    public function __construct(MetaRepository $meta, GalleryRepository $photo,PostRepository  $post)
    {

        $this->meta = $meta;
        $this->photo = $photo;
        $this->post = $post;
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
        $posts = $this->post->all();
        return view('index', compact(['meta', 'mainBanner', 'experienceBanner', 'mainBackground', 'serviceBanner', 'employeeBanner','posts']));
    }

    public function post($slug)
    {
        $post = $this->post->findBySlugWithRelation($slug);
        return view('post.index',compact(['post']));
    }
}
