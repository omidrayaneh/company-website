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
        // TODO: Implement findById() method.
    }

    public function allWithPaginate($page)
    {
        // TODO: Implement allWithPaginate() method.
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
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }


}
