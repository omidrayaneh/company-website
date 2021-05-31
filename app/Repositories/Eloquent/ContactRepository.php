<?php


namespace App\Repositories\Eloquent;


use App\Contact;
use App\Events\ContactEvent;
use App\Repositories\ContactRepositoryInterface;

class ContactRepository implements ContactRepositoryInterface
{

    public function all()
    {
        // TODO: Implement all() method.
    }
    public function findByStatus()
    {

    }
    public function findById($id)
    {
       return Contact::findOrFail($id);
    }

    public function allWithPaginate($page)
    {
        if (auth()->user()->role == 'admin' )
            return Contact::paginate(10);
        if (auth()->user()->role != 'admin' )
           return Contact::where('status',1)->paginate(10);
    }

    public function create($request)
    {

        $inputs = $request->only(['name','email','phone_number','msg_subject','message']);
        $contact = new Contact();
        $contact->name = $inputs['name'];
        $contact->email = $inputs['email'];
        $contact->phone = $inputs['phone_number'];
        $contact->title = $inputs['msg_subject'];
        $contact->body = $inputs['message'];
        $contact->save();
         event(new ContactEvent($contact));
        alert('ارسال','پیغام شما با موفقیت ارسال شد','success')->autoclose(3000);

    }

    public function update($request, $id)
    {
//        $contact = $this->findById($id);
//        if ($contact->status ==null || $contact->status ==0) {
//            $contact->status =1;
//        }
//
//        $contact->user_id = auth()->id();
//
//        $contact->save();
//        toast('با موفقیت بروز  شد', 'success');
    }

    public function delete($id)
    {
        $contact = $this->findById($id);
        $contact->delete();
    }


    public function markAsRead_contact($request)
    {
        auth()->user()->unreadNotifications->where('id', $request->id)->markAsRead();
        $contact = Contact::findOrFail($request->contactId);
        $contact->status =1;
        $contact->user_id = auth()->id();
        $contact->save();
    }

    public function markAsRead($request)
    {
        auth()->user()->unreadNotifications->where('id', $request->id)->markAsRead();
    }

}
