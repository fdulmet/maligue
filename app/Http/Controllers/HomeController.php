<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Auth;

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
        if(Auth::check())
        {
            return view('/home');
        }
        else
        {
            return view('/login');
        }
    }

    public function show()
    {
        $user = \App\User::findOrFail(); //si l'id n'existe pas, then fail (cad met un message d'erreur)
        //dd($user); //fonction pour voir le détail des attributs de la table
        return view('users.show', compact('user'));
    }

    //pour dialogBoxProfilJoueur.blade :
    public function edit()
    {
        $user = \App\User::findOrFail();
        return view('dialogBoxProfilJoueur', compact('user'));
    }

    public function update($id, UserRequest $request)
    {
        $joueur = User::findOrFail($id);
        $joueur->update($request->all());
        return redirect('users');
    }
}
