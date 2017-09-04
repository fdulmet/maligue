<?php
//pour créer un Controller : php artisan make:controller MachinController

namespace App\Http\Controllers;
//rien ne doit être placé avant la déclaration d'un namespace (sauf l'instruction declare)
//créer un seul namespace par fichier c'est mieux
//toutes les constantes, fonctions et classes déclarées ici feront partie du namespace App\Http\Controllers
//pour appeler une fontion du namespace global, ex: echo \strlen('Hello world !'); //y'a un backslash
//les includes sont dissociés des namespaces

use Illuminate\Http\Request;
//revient au même que d'écrire "use Illuminate\Http\Request as Request"
//ça importe la classe Request du namespace Illuminate\Http
//on utiliserait alors la façade : en remplaçant Illuminate\Http\Request; par Request;

class IndexController extends Controller
{
}




