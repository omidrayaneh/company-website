<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate(10);
        return view('admin.contacts.index',compact(['contacts']));
    }
    public function markAsRead(Request $request)
    {
        auth()->user()->unreadNotifications->where('id', $request->id)->markAsRead();
    }
    public function readContact( Request $request)
    {
        $contact = Contact::findOrFail($request->id);
        if ($contact->approve ==null || $contact->approve ==0) {
            $contact->approve =1;
        }
        else{
            $contact->approve =0;
        }
        $contact->save();
        toast('با موفقیت بروز  شد', 'success');

        return redirect('admin/contacts');
    }
}
