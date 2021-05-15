<?php

namespace App\Repositories\Eloquent;
use App\Meta;
use App\Photo;
use App\Repositories\MetaRepositoryInterface;


class MetaRepository implements MetaRepositoryInterface
{

    public function all()
    {
        return Meta::all();
    }
    public function findById($id)
    {
        return Meta::findOrFail($id);
    }


    public function getFirstActiveMeta()
    {
        return Meta::where('status',1)->first();
    }
    public function allWithPaginate($page)
    {
        return Meta::paginate($page);
    }

    public function create( $request)
    {

        $inputs = $request->only(['title', 'status','keyword','description']);

        $meta = new Meta();
        $meta->title = $inputs['title'];
        $meta->description = $inputs['description'];
        $meta->keyword = $inputs['keyword'];

        $meta->user_id = auth()->id();
        if (isset($inputs['status']) && $inputs['status'] =='on')
            $meta->status = 1;
        else
            $meta->status = 0;

        $meta->save();

        toast('متا اضافه شد','success');

    }


    public function update($request, $id)
    {
        $inputs = $request->only(['title', 'status','keyword','description']);

        $meta = $this->findById($id);

        $meta->title = $inputs['title'];
        $meta->description = $inputs['description'];
        $meta->keyword = $inputs['keyword'];

        $meta->user_id = auth()->id();
        if (isset($inputs['status']) && $inputs['status'] =='on')
            $meta->status = 1;
        else
            $meta->status = 0;

        $meta->save();

        toast('متا بروز شد','success');

    }

    public function delete($id)
    {
        $meta = $this->findById($id);
        $meta->delete();
    }



}
