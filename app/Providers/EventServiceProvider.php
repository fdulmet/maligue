<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        // Invitation d'une nouvelle personne
        'App\Events\InviteNewPersons' => [
            'App\Listeners\SendEmailToNewPersons',
            'App\Listeners\SendEmailToInviter',
            'App\Listeners\InsertEmailInInvitesTable'
        ],
        // Une personne s'inscrit après
        // avoir reçu une invite
        'App\Events\RegisterAfterInvitation' => [
            // 'App\Listeners\SendEmailToNewPerson'
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

        //à utiliser si on veut générer manuellement des events
    }
}
