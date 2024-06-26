<?php

namespace App\Repositories\Eloquent;
use App\Http\Requests\MenuRequest;
use App\Repositories\MenuRepositoryInterface;
use App\Menu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MenuRepository implements MenuRepositoryInterface
{

    public function all()
    {
        return Menu::all();
    }
    public function findById($id)
    {
        return Menu::findOrFail($id);
    }

    public function getparent($slug)
    {
        return  Menu::with('parentRecursive')->where('slug',$slug)->get();
    }

    public function findBySlug($slug)
    {
        return Menu::where('slug',$slug)->first();
    }

    public function getPostWithMenuSlug($slug)
    {
      return  Menu::with('posts')->where('slug',$slug)->first();
    }
    public function allWithPaginate($number)
    {
        return Menu::with(['childrenRecursive'])
            ->where('parent_id', null)
            ->paginate($number);
    }
    public function allWithOutPagination()
    {
        return  Menu::with(['childrenRecursive'])
            ->where('parent_id', null)
            ->get();
    }

    public function create( $request)
    {

        $inputs = $request->only(['title', 'parent_id', 'status']);

        if (!empty($inputs['parent_id'])){
            $parent = $this->findById($inputs['parent_id']);
            if ($parent->end){
               alert('خطا','این امکان وجود ندارد','error')->autoclose(1500);
                return;
            }

        }


        $Menu = new Menu();
        $Menu->title = $inputs['title'];
        $Menu->parent_id = $inputs['parent_id'];
        $Menu->user_id = auth()->id();
        $Menu->slug = Menu::makeSlug($inputs['title']);
        if (isset($inputs['status']) && $inputs['status'] =='on')
            $Menu->status = 1;
        else
            $Menu->status = 0;

        $Menu->save();

        toast('منو اضافه شد','success');

    }


    public function update($request, $slug)
    {
        $inputs = $request->only(['title', 'parent_id', 'status']);

        $Menu = $this->findBySlug($slug);

        $Menu->title = $inputs['title'];
        $Menu->parent_id = $inputs['parent_id'];
        $Menu->user_id = auth()->id();
        $Menu->slug = Menu::makeSlug($inputs['title']);
        if ( isset($inputs['status']) && $inputs['status'] =='on')
            $Menu->status = 1;
        else
            $Menu->status = 0;

        $Menu->save();

        toast('منو بروز شد','success');

    }

    public function delete($slug)
    {
        $Menu = $this->findBySlug($slug);
        $Menu->delete();
    }



}
