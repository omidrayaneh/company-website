<?php


namespace App\Repositories\Eloquent;


use App\Category;
use App\Repositories\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{

    public function all()
    {
       return Category::all();
    }

    public function allActive()
    {
        return Category::where('status',1)->get();
    }

    public function findById($id)
    {
        return Category::findOrFail($id);
    }

    public function allWithPaginate($page)
    {
        return Category::paginate($page);
    }

    public function create($request)
    {
        $inputs = $request->only(['name', 'status',]);

        $category = new Category();
        $category->name = $inputs['name'];
        if (isset($inputs['status']) && $inputs['status'] =='on')
            $category->status = 1;
        else
            $category->status = 0;

        $category->save();

        toast('گروه اضافه شد','success');
    }

    public function update($request, $id)
    {
        $inputs = $request->only(['name', 'status',]);

        $category = $this->findById($id);
        $category->name = $inputs['name'];
        if (isset($inputs['status']) && $inputs['status'] =='on')
            $category->status = 1;
        else
            $category->status = 0;

        $category->save();

        toast('گروه ویرایش شد','success');
    }

    public function delete($id)
    {
       $category = $this->findById($id);
       $category->delete();
    }

}
