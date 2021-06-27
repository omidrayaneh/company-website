<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditIndustryRequest;
use App\Http\Requests\IndustryRequest;
use App\Industry;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return :\Illuminate\Http\Response
     */
    public function index()
    {
        $industries = Industry::paginate(10);
        return view('admin.industries.index',compact('industries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return :\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.industries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  :\Illuminate\Http\Request  $request
     * @return :\Illuminate\Http\Response
     */
    public function store(IndustryRequest $request)
    {
        $inputs = $request->only(['title','status']);

        $industry = new Industry();
        $industry->title =$inputs['title'];
        if (isset($inputs['status']) && $inputs['status'] =='on')
            $industry->status = 1;
        else
            $industry->status = 0;
        $industry->user_id = auth()->id();
        $industry->save();

        toast('صنعت اضافه شد','success');
        return redirect(route('industries.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return :\Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return :\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $industry = Industry::findOrFail($id);
        return view('admin.industries.edit',compact(['industry']));



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  :\Illuminate\Http\Request  $request
     * @param  int  $id
     * @return :\Illuminate\Http\Response
     */
    public function update(EditIndustryRequest $request, $id)
    {
        $inputs = $request->only(['title','status']);

        $industry = Industry::findOrFail($id);
        $industry->title =$inputs['title'];
        if (isset($inputs['status']) && $inputs['status'] =='on')
            $industry->status = 1;
        else
            $industry->status = 0;
        $industry->user_id = auth()->id();
        $industry->save();

        toast('صنعت بروز شد','success');
        return redirect(route('industries.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return :\Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $industry = Industry::findOrFail($id);
        $industry->delete();
    }
}
