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
        'App\Events\Test' => [
        'App\Listeners\Test',
        //'App\Events\RegisterEvent' => [//event(key)
          //  'App\Listeners\RegisterListener',//listeners(values) //et éventuellement d'autres listeners
        ],
    ];
    //Ensuite php artisan event:generate génère les events et listeners listés ici

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
