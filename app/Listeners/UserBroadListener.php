<?php

namespace App\Listeners;

use App\Events\UserBroad;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserBroadListener
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
     * @param  UserBroad  $event
     * @return void
     */
    public function handle(UserBroad $event)
    {
        $event->listener = 'listener';
    }
}
