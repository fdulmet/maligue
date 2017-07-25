<?php

namespace App;

use App\Equipe;
use App\Notifications\AdminNewUserMail;
use App\Notifications\ResetPassword;
use App\Notifications\UserWelcomeMail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'prenom', 'email', 'password', 'tel'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * Plusieurs équipes peuvent appartenir à un user.
     */
    public function equipes()
    {
        return $this->belongsToMany('App\Equipe');
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    public function sendWelcomeMail()
    {
        // Envoi de mail au nouvel inscris
        $this->notify(new UserWelcomeMail());
    }

    public function isCapitaine($idEquipe)
    {
        $isCapitaine = Equipe::where([
            'id' => $idEquipe,
            'user_id' => $this->id
        ])->get();

        return $isCapitaine->count();
    }
}

/*
    public function articles()//cf Joueur.php commentaires bas pour voir qu'y faire dans le cas d'articles qui appartiennent à un user
    {
        return $this->hasMany('App\Article')
    }
    */

//public function equipe()
//{
//    return $this->hasOne('App\Equipe');//hasMany pour : un joueur peut avoir pluieurs équipes
//}
