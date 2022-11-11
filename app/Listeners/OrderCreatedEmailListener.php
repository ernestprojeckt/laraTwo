<?php

namespace App\Listeners;

use App\Events\OrderCreatedEvent;
use App\Jobs\OrderCreatedJob;


class OrderCreatedEmailListener
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
     * @param  object  $event
     * @return void
     */
    public function handle(OrderCreatedEvent $event)
    {
        OrderCreatedJob::dispatch($event->order)->onQueue('email'); // queue: default
    }


}
