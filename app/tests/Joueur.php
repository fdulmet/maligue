<?php
//eloquent avec php artisan tinker (pour remplir les tables avec Dulmet, Francois, New Team, etc.)

//on a créé ce fichier comme ça :
//php artisan make:model Joueur
//cad qu'on crée a new Eloquent model class

// et une fois qu'on a créé ce fichier, on fait :
// php artisan tinker
//puis à côté de >>> taper :
//$joueur = new App\Joueur
//s'affiche => App\Joueur {#667} // ou un autre nombre
//en fait les propriétés (incrementing, timestamps, etc.) de l'objet ne sont pas affichées comme sur linux ou mac
//mais elles sont bien créées
//pour voir les propriétés de l'objet : var_dump($joueur);

//Maintenant on remplit la table joueurs
//dans entrées existantes ! (fait dans create_joueurs_table) (par ex, il faut que l'entrée prenom existe)
//>>>$joueur->prenom = 'François'

//pour published_at (si besoin) :
//$article->published_at = Carbon\Carbon::now()

//pour rentrer toutes les valeurs d'un coup (en créant un array de valeurs) :
//$joueur = App\Joueur::create(['nom'=>'Binet', 'prenom'=>'Edouard', 'equipe'=>'Les Matadors']);
//et pour pas de mass assignement error, on ajoute protected $fillable etc dans la class Joueur (ci-dessous)

//Mnt, on transfère ça à la bdd :
//$joueur->save();

//pour trouver par ex ce qu'il y a dans telle colonne ou case de la table :
//$joueur = App\Joueur::find(1)
//OU :
//$joueur = App\Joueur::where('nom', 'Dulmet')->get();
//OU :
//$joueur->nom;

//pour voir toute la table :
//App\Joueur::all()->toArray();

//pour changer une seule case :
//$joueur = App\Joueur::find(2);
//PUIS $joueur->nom = 'Bineto';
//PUIS $joueur->save();
//OU : (pour entrer un array d'un coup)
//$joueur->update(['nom'=>'Bineto', 'prenom'=>'Edouardo']);

/*
C:\wamp64\www\maligue>php artisan tinker
Psy Shell v0.8.1 (PHP 5.6.25 ÔÇö cli) by Justin Hileman
>>> $user = new App\User
=> App\User {#668}
>>> $user = App\User::create(['nom'=>'Dulmet', 'prenom'=>'Francois', 'equipe'=>'La New Team', 'email'=>'fdulmet@gmail.com', 'password'=>Hash::make('password')]);
(OU : 'password'=>bcrypt('password')*/


namespace App;

use Illuminate\Database\Eloquent\Model;

class Joueur extends Model //our class is extending this parent Model
{
    protected $fillable = [ //means for which attributes am I ok that they are mass assigned
        'nom',
        'prenom',
        'equipe',
        'user_id' //temporairement (car on va faire auth)
    ];
    /*
    protected $dates = ['published_at'];
    public function scopePublished($query)//c'est un query scope
    {
       $query->where('published_at', '<=', Carbon::now());
    }
    public function setPublishedAtAttribute($date)//c'est un mutator
    {
        $this->attributes['published_at'] = Carbon::parse($date);
    }
    public function user()//si on est dans le cas d'articles, qui appartiennent ici à un user
    {
        return $this->belongsTo('App\User)
    }
    */
}
