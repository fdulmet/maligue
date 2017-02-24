<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', 'IndexController@index');
//pour créer un controller : php artisan make:controller MachinController
//pour connaître les options dispos de make:controller FAIRE php artisan help make:controller

//Route::get('joueurs', 'JoueursController@index' );// ensuite j'ajoute la public function index (ou create ou...) à JoueursController.php
//Route::get('joueurs/create', 'JoueursController@create' );//il faut bien mettre la ligne create avant la ligne {id} pour que ce soit d'abord créé
//Route::get('joueurs/{id}', 'JoueursController@show' );
//Route::post('joueurs', 'JoueursController@store');
//Route::get('joueurs/{id}/edit', 'JoueursController@edit');

//Route::resource('joueurs', 'JoueursController');
//crée automatiquement toutes les routes 'joueurs etc' ci-dessus et d'autres (destroy, update)
//pour les voir : php artisan route:list
//mais il faut quand même créer les méthodes dans JoueursController (public function create() etc)

Route::get('/test', 'TestController@test');

Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/home.php', 'HomeController@index');

Route::get('auth/facebook', 'Auth\FacebookController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\FacebookController@handleProviderCallback');

//Test editer un form :
Route::get('tests', 'TestController@index');
Route::get('tests/create', 'TestController@create' );
Route::get('tests/{id}', 'TestController@show' );
Route::post('tests', 'TestController@store');
Route::get('tests/{id}/edit', 'TestController@edit');


//Route::get('/', 'HomeController@show');
//Route::get('/home', 'HomeController@show');

/*Route::get('partials/contact', function () {
    $name = 'François Dulmet';
    return view('partials/contact')->with('name', $name);
    //on peut écrire partials.contact pour une écriture un peu orientée objet (~?)
});*/

//Route::get('tests', 'ExemplesController@content');
//on peut aussi faire sans passer par controller comme ça : (mais en pratique on le fait pas)
//Route::get('coordonnees_capitaines', function () {
//    return view('coordonnees_capitaines');
//});

/*On peut faire avec un array pour plusieurs variables :
 * Route::get('partials/contact', function () {
    return view('partials.contact')->with([
        'first' => 'Marie',
        'last' => 'Dupont'
    ])
*/
//et on met dans contact.blade.php : <p>La meuf machin s'appelle {{ $first }} {{$last}}</p>

// et y'a encore 2 autres possibilités à la fin de la vidéo
// https://laracasts.com/series/laravel-5-fundamentals/episodes/4?autoplay=true
// la dernière étant visiblement la plus clean...








