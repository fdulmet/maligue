<?php

namespace App\Http\Controllers;
use App\Http\Requests;

//use Illuminate\Http\Request; (?)
//use Illuminate\HttpResponse; (?)

use App\Joueur;
use App\Http\Requests\JoueurRequest;

class JoueursController extends Controller
{
    public function index()
    {
        $joueurs = \App\Joueur::all(); //si c'était articles de blog, pour mettre le dernier en date en haut de la page : $articles = Article::latest()->get();
        return view('joueurs.index', compact('joueurs')); //le 1er 'joueurs' est la view, le 2ème 'joueurs' est la variable
        //OU : return view('joueurs')->with('joueurs', $joueurs); //c'est + explicite
    }

    public function show($id)
    {
        $joueur = \App\Joueur::findOrFail($id); //si l'id n'existe pas, then fail (cad met un message d'erreur)
        //dd($joueur); //fonction pour voir le détail des attributs de la table
        return view('joueurs.show', compact('joueur'));
    }

    public function create()
    {
        return view('joueurs.create'); //ensuite je crée la view joueurs/create.blade.php
    }

    public function store(JoueurRequest $request)//du coup validation lancée avant méthode pour voir si rules ok
    //il faut créer CreateArticleRequest, cf infos dedans
    // store : responsible for taking the form data, throwing it to the database, and probably redirecting the user to somewhere else
    {
        Joueur::create($request->all());
        //pour contrer mass assignment vulnerability : dans Joueur
        //on fetch tout l'input, que ce soit depuis les get ou post superglobals
        return redirect('joueurs');

        //OU :
        //$content = Request::get('nom');
        //return $content;

        //pour vraiment créer un nouveau nom :
        //Joueur::create
        //OU :
        //$joueur = new Joueur;
        //$joueur->nom = 'Dulmet'; //donc manuellement
        //OU :
        //$joueur = new Joueur;
        //$joueur->nom = $input['nom']; //eloquent nous protège de sql injection


    }

    public function edit($id)
    {
        $joueur = Joueur::findOrFail($id);
        return view('joueurs.edit', compact('joueur'));
    }

    public function update($id, JoueurRequest $request)
    {
        $joueur = Joueur::findOrFail($id);
        $joueur->update($request->all());
        return redirect('joueurs');
    }
}
