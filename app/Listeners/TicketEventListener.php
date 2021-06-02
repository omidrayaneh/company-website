<?php

namespace App\Listeners;

use App\Events\TicketEvent;
use App\Notifications\TicketAlert;
use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class TicketEventListener
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
     * @param  object  $ticket
     * @return void
     */
    public function handle(TicketEvent $event)
    {
        $ticket = $event->ticket;
        $notification = new TicketAlert($ticket);
        $admins = User::where('role' ,'admin')->get();
        foreach ($admins as $admin){
            if ($admin->category_id == $ticket->category_id)
              $admin->notify($notification);
        }
    }
}
