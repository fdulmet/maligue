<?php

namespace App\Listeners;

use App\Equipe;
use App\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;

class LogSuccessfulLogin
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
     * @param  Login $event
     */
    public function handle(Login $event)
    {
        /**
         * @var $user User
         */
        $user = $event->user;

        // Store in sessions the current ligue, current team and current season
        if ($user->isAdmin() || $user->isAdminligue())
        {
            /**
             * Equipe
             */
            $currentEquipe = $user->equipes()->first();
            if (is_null($currentEquipe))
            {
                $currentEquipe = Equipe::with('ligues')->first();
            }
            session(['currentEquipe' => $currentEquipe]);

            /**
             * Ligue
             */
            $currentLigue = $currentEquipe->ligues()->first();
            session(['currentLigue' => $currentLigue]);

            /**
             * Saison
             */
            $currentSaison = $currentLigue->seasons()->first();
            session(['currentSaison' => $currentSaison]);
        }
        else
        {
            /**
             * Equipe
             */
            $currentEquipe = $user->equipes()->first();

            if (is_null($currentEquipe))
            {
                session(['notloggedin' => 'Vous ne faites parti d\'aucune équipe, merci de contacter l\'administrateur.']);

                return false;
            }

            session(['currentEquipe' => $currentEquipe]);

            /**
             * Ligue
             */
            $currentLigue = $currentEquipe->ligues()->first();

            if (is_null($currentLigue))
            {
                flash('Votre équipe ne fait parti d\'aucune ligue, merci de contacter l\'administrateur.')->error();

                session(['notloggedin' => true]);

                return false;
            }

            session(['currentLigue' => $currentLigue]);

            /**
             * Saison
             */
            $currentSaison = $currentLigue->seasons()->first();

            if (is_null($currentLigue))
            {
                flash('Votre ligue ne fait parti d\'aucune saison, merci de contacter l\'administrateur.')->error();

                session(['notloggedin' => true]);

                return false;
            }

            session(['currentSaison' => $currentSaison]);
        }

        flash("Bienvenu {$user->prenom}")->success();
    }
}
