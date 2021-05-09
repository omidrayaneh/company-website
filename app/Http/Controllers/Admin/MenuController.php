<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditMenuRequest;
use App\Http\Requests\MenuRequest;
use App\Repositories\Eloquent\MenuRepository;
use Illuminate\Http\Request;

class MenuController extends Controller
{


    /**
     * @var MenuRepository
     */
    private $menu;

    public function __construct(MenuRepository $menu)
    {
        $this->menu = $menu;
    }

    /**
     * Display a listing of the resource.
     *
     * @return  /menu index
     */
    public function index()
    {
        $menus = $this->menu->allWithPaginate(10);
        return view('admin.menus.index',compact(['menus']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return /menu craete page
     */
    public function create()
    {
        $menus = $this->menu->allWithOutPagination();
        return view('admin.menus.create',compact(['menus']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return /Redirector to menu index page
     */
    public function store(MenuRequest $request)
    {
        $this->menu->create($request);
        return redirect(route('menus.index'));
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
     * @return /View edit page
     */
    public function edit($slug)
    {
        $menu = $this->menu->findBySlug($slug);
        $menus = $this->menu->allWithOutPagination();
        return view('admin.menus.edit',compact(['menus','menu']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $slug
     * @return /Redirector to menu index page
     */
    public function update(EditMenuRequest $request, $slug)
    {
        $this->menu->update($request , $slug);
        return redirect(route('menus.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $menu = $this->menu->findBySlug($slug);
        $menu->delete();
        return response(['success'=>'حذف شد',200]);
    }
}
