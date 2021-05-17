<?php

namespace App\Listeners;

use App\Events\ContactEvent;
use App\Notifications\ContactAlert;
use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ContactEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $contact
     * @return void
     */
    public function handle(ContactEvent $event)
    {
        $contact = $event->contact;
        $notification = new ContactAlert($contact);
        $admins = User::where('role' ,'admin')->get();
        foreach ($admins as $admin){
            $admin->notify($notification);
        }
    }
}
