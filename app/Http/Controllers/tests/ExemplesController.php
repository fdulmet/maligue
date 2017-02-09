<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExemplesController extends Controller
{
    public function lala() // _content est une méthode
    {
        $prenom = 'François';
        $people = [
            'maman', 'ml', 'zidane'
        ];
        return view('tests', compact('people','prenom'));
    }
}
