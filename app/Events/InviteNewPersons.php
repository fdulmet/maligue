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
    public function __construct($invitationType, $newPersonInputEmails, $data)
    {
        // On stock le type d'invitation
        $this->invitationType = $invitationType;

        // On stock les emails des invités
        $this->newPersonInputEmails = $newPersonInputEmails;
        $this->currentUser = Auth::user();

        $currentEquipe = $data['currentEquipe'];
        $this->equipe = $currentEquipe->nom;

        $currentLigue = $data['currentLigue'];
        $this->ligue = $currentLigue->nom;
        $this->sport = $currentLigue->sport;

        // Calendrier
        $this->game = Game::find(1);
        $this->lieu = 'UrbanSoccer la Défense';
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
