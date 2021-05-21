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
    /**
     * @var MenuRepository
     */
    private $menu;

    public function __construct(MetaRepository $meta, GalleryRepository $photo,PostRepository  $post,MenuRepository $menu)
    {

        $this->meta = $meta;
        $this->photo = $photo;
        $this->post = $post;
        $this->menu = $menu;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($locate = null)
    {
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
        $menu_ = $this->menu->findBySlug($slug);
        $post=[];
        if (!empty($menu_)){
            $post = $this->post->findByMenu($menu_->id);
        }else{
            $post = $this->post->findBySlug($slug);
        }
        return view('post.index',compact(['post']));
    }
    public function postWithMenu($slug)
    {
        $menu_ = $this->menu->findBySlug($slug);
        $post = $this->post->findByMenu($menu_->id);
        return view('post.index',compact(['post']));
    }
}
