<?php

namespace App\Repositories\Eloquent;
use App\Post;
use App\Menu;
use App\Repositories\PostRepositoryInterface;
use Illuminate\Database\Eloquent\Model;


class PostRepository implements PostRepositoryInterface
{

    public function all()
    {
        return Post::all();
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
        return Post::with('menu')->where('slug',$slug)->first();
    }

    public function allWithPaginate($page)
    {
        return  Post::with('menu')->paginate($page);
    }

    public function create( $request)
    {

        $inputs = $request->only(['title', 'description', 'status','meta_description','meta_keywords','menu_id','description']);

        $post = new Post();
        $post->title = $inputs['title'];
        $post->menu_id = $inputs['menu_id'];
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

        toast('مطلب اضافه شد','success');

    }


    public function update($request, $slug)
    {
        $inputs = $request->only(['title', 'description', 'status','meta_description','meta_keywords','menu_id','description']);

        $post = $this->findBySlug($slug);
        $post->title = $inputs['title'];
        $post->menu_id = $inputs['menu_id'];
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

        toast('مطلب بروز شد','success');

    }

    public function delete($slug)
    {
        $post = $this->findBySlug($slug);
        $post->delete();
    }



}
