<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;


class InviterAmisDansEquipe extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The order instance.
     *
     * @var User
     */
    public $user='François';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('lala@gmail.com')//on peut aussi mettre une "global from address" dans config/mail
                    ->view('emails.InviterAmisDansEquipe');
                    //->text('emails.orders.shipped_plain');//si on veut plain-text version de l'email

    }
}
