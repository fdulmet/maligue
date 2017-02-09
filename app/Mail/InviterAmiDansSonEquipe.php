<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InviterAmiDansSonEquipe extends Mailable
{
    use Queueable, SerializesModels;

    public $equipe;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Equipe $equipe)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('{{ Auth::user()->email }}')
                    ->view('emails.InviterAmiDansSonEquipe');
    }
}
