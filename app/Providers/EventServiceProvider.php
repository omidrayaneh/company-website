<?php

namespace App\Providers;

use App\Events\CommentEvent;
use App\Events\ContactEvent;
use App\Events\TicketEvent;
use App\Listeners\CommentEventListener;
use App\Listeners\ContactEventListener;
use App\Listeners\TicketEventListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ContactEvent::class => [
            ContactEventListener::class,
        ],
        TicketEvent::class => [
            TicketEventListener::class,
        ],
        CommentEvent::class => [
            CommentEventListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
