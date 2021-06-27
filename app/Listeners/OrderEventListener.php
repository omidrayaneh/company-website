<?php

namespace App\Listeners;

use App\Category;
use App\Events\OrderEvent;
use App\Events\TicketEvent;
use App\Notifications\OrderAlert;
use App\Notifications\TicketAlert;
use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class OrderEventListener
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
    public function handle(OrderEvent $event)
    {
        $order = $event->order;
        $notification = new OrderAlert($order);
        $admins = User::with('categories')->where('role' ,'admin')->get();
        $cat = Category::where('name','فروش')->first();
        foreach ($admins as $admin){
            foreach ($admin->categories as $category){
                if ($category->id == $cat->id){
                    $admin->notify($notification);
                }
            }

        }
    }
}
