<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditPostRequest;
use App\Http\Requests\PostRequest;
use App\Menu;
use App\Repositories\Eloquent\MenuRepository;
use App\Repositories\Eloquent\PostRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{

    /**
     * @var PostRepository
     */
    private $post;
    /**
     * @var MenuRepository
     */
    private $menu;

    public function __construct(PostRepository $post,MenuRepository $menu)
    {
        $this->post = $post;
        $this->menu = $menu;
    }

    /**
     * Display a listing of the resource.
     *
     * @return /all posts
     */
    public function index()
    {
        $posts = $this->post->allWithPaginate(10);
        return view('admin.posts.index',compact(['posts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return /create new post
     */
    public function create()
    {
       $menus= $this->menu->allWithOutPagination();
        return view('admin.posts.create',compact(['menus']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return / post index page
     */
    public function store(PostRequest $request)
    {

        $menu = $this->menu->findById($request->menu_id);


        if ($menu->added_post ){
            alert('خطا','قبلا مطلبی اختصاص یافته است','error')->autoclose(2000);
          return  back()->withInput();
        }
       $this->post->create($request);
        return redirect('admin/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $slug
     * @return /edit post
     */
    public function edit($slug)
    {
        $menus= $this->menu->allWithOutPagination();
         $post = $this->post->findBySlugWithRelation($slug);
        return view('admin.posts.edit',compact(['post','menus']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $slug
     * @return /redirect index page
     */
    public function update(EditPostRequest $request, $slug)
    {
        $post = $this->post->findBySlugWithRelation($slug);
        $menu = $this->menu->findById($request->menu_id);

        if ($menu->added_post && $menu->end && $post->menu_id != $menu->id){
            alert('خطا','قبلا مطلبی اختصاص یافته است','error')->autoclose(2000);
            return  back()->withInput();
        }



        $this->post->update($request,$slug);
        return redirect('admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = $this->post->findBySlug($slug);
        $menus_remove = Menu::with('parentRecursive')->where('id',$post->menu->id)->get();
        //disable parent menu after add post
        $menus_remove[0]->end = 0;
        $menus_remove[0]->save();
        $this->recurcive_remove($menus_remove[0]);
        $post->delete();
    }


    public function recurcive_remove($menu)
    {
        $menu->added_post = 0;
        $menu->save();
        if (!empty($menu->parentRecursive)){
            $this->recurcive_remove($menu->parentRecursive);
        }
    }
}
