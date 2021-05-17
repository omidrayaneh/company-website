<?php

namespace App\Http\Controllers\Frontend;

use App\Events\ContactEvent;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\CompanyRepository;
use App\Repositories\Eloquent\ContactRepository;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    /**
     * @var ContactRepository
     */
    private $contact;
    /**
     * @var CompanyRepository
     */
    private $company;

    public function __construct(ContactRepository $contact,CompanyRepository $company)
    {
        $this->contact = $contact;
        $this->company = $company;
    }

    /**
     * Display a listing of the resource.
     *
     * @return |\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $company = $this->company->findByStatus();
        return view('contact.index',compact(['company']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // event(new ContactEvent(id));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->contact->create($request);
        return back();
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
