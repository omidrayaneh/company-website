<?php

namespace App\Repositories\Eloquent;
use App\Post;
use App\Menu;
use App\Repositories\PostRepositoryInterface;


class PostRepository implements PostRepositoryInterface
{

    public function all()
    {
        return Post::with('photo','menu')->where('status',1)->latest ()->limit(4)->get();
    }
    public function findById($id)
    {
        return Post::findOrFail($id);
    }
    public function findBySlug($slug)
    {
        return Post::where('slug',$slug)->first();
    }
    public function findBySlugWithRelation($slug)
    {
        return Post::with('menu','photo')->where([['slug',$slug],['status',1]])->first();
    }

    public function allWithPaginate($page)
    {
        return  Post::with('menu')->paginate($page);
    }

    public function create( $request)
    {

        $inputs = $request->only(['title', 'description', 'status','meta_description','meta_keywords','menu_id','photo_id','description']);
        $flag=true;
        $post = new Post();
        $post->title = $inputs['title'];
        $post->menu_id = $inputs['menu_id'];
        $post->user_id = auth()->id();
        $post->photo_id =$inputs['photo_id'];
        $post->meta_keywords = $inputs['meta_keywords'];
        $post->meta_description = $inputs['meta_description'];
        $post->description = $inputs['description'];
        $post->slug = Post::makeSlug($inputs['title']);
        $post->sku = Post::generateSKU();
        if (isset($inputs['status']) && $inputs['status'] =='on')
            $post->status = 1;
        else
            $post->status = 0;
        $post->save();

        //disable parent menu after add post
        $menus = Menu::with('parentRecursive')->where('id',$request->menu_id)->get();
        $menus[0]->end = 1;
        $menus[0]->save();
        $this->recurcive($menus[0]);
        //disable parent menu after add post


        toast('مطلب اضافه شد','success');

    }

    public function recurcive($menu)
    {
        $menu->added_post = 1;
        $menu->save();
        if (!empty($menu->parentRecursive)){
            $this->recurcive($menu->parentRecursive);
        }
    }
    public function recurcive_remove($menu)
    {
        $menu->added_post = 0;
        $menu->save();
        if (!empty($menu->parentRecursive)){
            $this->recurcive_remove($menu->parentRecursive);
        }
    }
    public function update($request, $slug)
    {
        $inputs = $request->only(['title', 'description', 'status','meta_description','meta_keywords','menu_id','photo_id','description']);
        $post = $this->findBySlug($slug);
        $menu = Menu::findOrFail($request->menu_id);
        if ($post->menu_id != $menu->id){
            $menus_remove = Menu::with('parentRecursive')->where('id',$post->menu_id)->get();
            //disable parent menu after add post
            $menus_remove[0]->end = 0;
            $menus_remove[0]->save();
            $this->recurcive_remove($menus_remove[0]);
            //disable parent menu after add post
        }


        $post->title = $inputs['title'];
        $post->menu_id = $inputs['menu_id'];
        $post->photo_id =$inputs['photo_id'];
        $post->meta_keywords = $inputs['meta_keywords'];
        $post->meta_description = $inputs['meta_description'];
        $post->description = $inputs['description'];
        $post->user_id = auth()->id();
        $post->slug = Post::makeSlug($inputs['title']);
        $post->sku = Post::generateSKU();
        if (isset($inputs['status']) && $inputs['status'] =='on')
            $post->status = 1;
        else
            $post->status = 0;


        $post->save();
        $flag=true;
        //disable parent menu after add post
        $menus = Menu::with('parentRecursive')->where('id',$inputs['menu_id'])->get();
        $menus[0]->end = 1;
        $menus[0]->save();
        $this->recurcive($menus[0]);
        //disable parent menu after add post

        toast('مطلب بروز شد','success');

    }

    public function delete($slug)
    {
        $post = $this->findBySlug($slug);
        $post->delete();
    }



}
