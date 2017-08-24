<?php

namespace App;

use App\Equipe;
use App\Role;
use App\Notifications\AdminNewUserMail;
use App\Notifications\ResetPassword;
use App\Notifications\UserWelcomeMail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

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
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


    /**
     * Plusieurs équipes peuvent appartenir à un user.
     */
    public function equipes()
    {
        return $this->belongsToMany('App\Equipe');
    }

    /**
     * The roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role');
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

    /*public function isCapitaine($idEquipe)
    {
        $isCapitaine = Equipe::where([
            'id' => $idEquipe,
            'user_id' => $this->id
        ])->get();

        return $isCapitaine->count();
    }*/

    public function isAdmin()
    {
        return $this->roles->contains('level', Role::ADMIN);
    }

    public function isAdminLigue()
    {
        return $this->roles->contains('level', Role::ADMIN_LIGUE);
    }

    public function isCapitaine()
    {
        return $this->roles->contains('level', Role::CAPITAINE);
    }

    public function isJoueur()
    {
        return $this->roles->contains('level', Role::JOUEUR);
    }
}