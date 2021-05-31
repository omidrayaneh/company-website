<?php

namespace App\Listeners;

use App\Events\CommentEvent;
use App\Notifications\CommentAlert;
use App\Notifications\TicketAlert;
use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CommentEventListener
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
     * @param CommentEvent $event
     * @return void
     */
    public function handle(CommentEvent $event)
    {
        $comment = $event->comment;
        $notification = new CommentAlert($comment);
        $admins = User::where('role' ,'admin')->get();
        foreach ($admins as $admin){
            $admin->notify($notification);
        }
    }
}
