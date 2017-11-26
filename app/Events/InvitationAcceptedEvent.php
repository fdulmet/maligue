<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Invitation;
use App\User;

class InvitationAcceptedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $invitation;
    public $invitedUser;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Invitation $invitation, User $invitedUser)
    {
        $this->invitation = $invitation;
        $this->invitedUser = $invitedUser;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
