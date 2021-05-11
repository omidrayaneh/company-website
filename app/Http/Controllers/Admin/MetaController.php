<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditMetaRequest;
use App\Http\Requests\MetaRequest;
use App\Repositories\Eloquent\MetaRepository;
use Illuminate\Http\Request;

class MetaController extends Controller
{


    private $meta;

    public function __construct(MetaRepository $meta)
    {

        $this->meta = $meta;
    }

    /**
     * Display a listing of the resource.
     *
     * @return /meta index page
     */
    public function index()
    {
        $metas = $this->meta->allWithPaginate(10);
        return view('admin.metas.index',compact(['metas']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return /meta create page
     */
    public function create()
    {
        return view('admin.metas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return /to metas index page
     */
    public function store(MetaRequest $request)
    {
        $this->meta->create($request);
        return redirect('/admin/metas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return / to meta edit page
     */
    public function edit($id)
    {
        $meta = $this->meta->findById($id);
        return view('admin.metas.edit',compact(['meta']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return /after edit return to meta index page
     */
    public function update(EditMetaRequest $request, $id)
    {
       $this->meta->update($request,$id);
       return redirect('/admin/metas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->meta->delete($id);
    }
}
