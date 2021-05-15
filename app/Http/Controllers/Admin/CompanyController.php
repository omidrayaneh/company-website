<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\CompanyRepository;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    /**
     * @var CompanyRepository
     */
    private $companies;

    public function __construct(CompanyRepository $companies)
    {
        $this->companies = $companies;
    }

    /**
     * Display a listing of the resource.
     *
     * @return /company index page
     */
    public function index()
    {
        $companies =  $this->companies->allWithPaginate(10);
        return view('admin.companies.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return /company create page
     */
    public function create()
    {
       return view('admin.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return |\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->companies->create($request);
        return redirect('admin/companies');
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
     * @return |\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $company =  $this->companies->findById($id);
        return view('admin.companies.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return |\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
         $this->companies->update($request,$id);
        return redirect('admin/companies');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->companies->delete($id);
    }
}
