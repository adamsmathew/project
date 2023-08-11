<?php

namespace App\Listeners;

use App\Events\NewUserCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserCreatedMail;


class SendWelcomeMailListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(NewUserCreatedEvent $event): void
    {
        info($event->user);
        Mail::to($event->user->email)
        ->send(new UserCreatedMail($event->user));


    }
}
