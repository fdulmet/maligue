<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use App\Notifications\MaLigueAdminNewUserMail;
use App\Notifications\MaLigueUserWelcomeMail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\MaLigueResetPassword;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'prenom', 'is_capitaine', 'email', 'password', 'tel'
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
        $this->notify(new MaLigueResetPassword($token));
    }

    public function adminSendNewUserMail($newUserMail, $ligueName)
    {
        // Envoi de mail à l'admin du site
        $this->notify(new MaLigueAdminNewUserMail($newUserMail, $ligueName));
    }

    public function sendWelcomeMail()
    {
        // Envoi de mail au nouvel inscris
        $this->notify(new MaLigueUserWelcomeMail());
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
