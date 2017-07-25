<?php

namespace App\Events;

use App\Equipe;
use App\Game;

use Illuminate\Support\Facades\Auth;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class InviteNewPersons
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $newPersonInputEmails;
    public $currentUser;
    public $ligue;
    public $equipe;
    public $sport;
    public $game;
    public $lieu;
    public $invitationType;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($invitationType, $newPersonInputEmails)
    {
        // On stock le type d'invitation
        $this->invitationType = $invitationType;

        // On stock les emails des invités
        $this->newPersonInputEmails = $newPersonInputEmails;
        $this->currentUser = Auth::user();

        // Equipe
        $entreeEquipe = $this->currentUser->equipes()->get();
        foreach ($entreeEquipe as $equipe) {
            $this->equipe = $equipe->nom;
        }

        // Ligue
        $ligue = Equipe::find($entreeEquipe)->ligues()->get();
        foreach ($ligue as $ligue) {
            $this->ligue = $ligue->nom;
            $this->sport = $ligue->sport;
        }

        // Calendrier
        $this->game = Game::find(1);
        $this->lieu = $this->game->lieu;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
