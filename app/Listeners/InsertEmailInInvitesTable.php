<?php

namespace App\Listeners;

use App\Events\InviteNewPersons;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class InsertEmailInInvitesTable
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
     * @param  InviteNewPersons  $event
     * @return void
     */
    public function handle(InviteNewPersons $event)
    {
        //
    }
}
