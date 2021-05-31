<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\ContactRepository;
use Illuminate\Http\Request;

class ContactController extends Controller
{


    /**
     * @var ContactRepository
     */
    private $contact;

    public function __construct(ContactRepository $contact)
    {
        $this->contact = $contact;
    }

    public function index()
    {
        $contacts = $this->contact->allWithPaginate(10) ;
        return view('admin.contacts.index',compact(['contacts']));
    }

    public function markAsRead(Request $request)
    {
        $this->contact->markAsRead($request);
    }
    public function markAsRead_contact(Request $request)
    {
        $this->contact->markAsRead($request);
    }

    public function readContact(Request $request)
    {

        $this->contact->readContact($request);
        return redirect('admin/contacts');
    }

    public function edit($id)
    {
        $contact = $this->contact->findById($id);
        return view('admin.contacts.edit',compact(['contact']));
    }

    public function update(Request $request,$id)
    {
        $this->contact->update($request,$id);
        return redirect('admin/contacts');
    }

    public function show($id)
    {
        $contact = $this->contact->findById($id);
        return view('admin.contacts.show',compact(['contact']));
    }
    public function destroy($id)
    {
        $this->contact->delete($id);
    }
}
