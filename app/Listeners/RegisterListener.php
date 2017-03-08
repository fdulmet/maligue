<?php

namespace App\Listeners;

use App\Events\RegisterEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisterListener
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
     * @param  RegisterEvent  $event
     * @return void
     */
    public function handle(RegisterEvent $event)// Event listeners receive the event instance in their handle method
                                                //parenthèses remplies par artisan event:generate
    {
        //Within the handle method, you may perform any actions necessary to respond to the event
        // Access the order using $event->order...

        dd('bim');
        //TeamController->associateUserToTeam($event->user);


    }
}