<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/home');
    }

    public function show()
    {
        $user = \App\Joueur::findOrFail(); //si l'id n'existe pas, then fail (cad met un message d'erreur)
        //dd($joueur); //fonction pour voir le détail des attributs de la table
        return view('joueurs.show', compact('joueur'));
    }
}
