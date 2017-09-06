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

use App\Mail\InviterAmisDansEquipe;
use App\Http\Controllers;

/**
 * Laravel Auth system
 */
Route::group(['middleware' => ['web']], function() {

// Login Routes...
    Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
    Route::get('logout', ['as' => 'logout.get', 'uses' => 'UserController@logout']);
    Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

// Registration Routes...
    Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
    Route::post('register', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);

// Password Reset Routes...
    Route::get('password/reset', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
    Route::post('password/reset', ['as' => 'password.reset.post', 'uses' => 'Auth\ResetPasswordController@reset']);
});

Route::get('/register', function () {
    return redirect('/login');
});

Route::resource('user', 'UserController', ['only' => [
    'update'
]]);

// Route::get('login/facebook', 'Auth\FacebookController@redirectToProvider');//Auth\FacebookController c'est le namespace
// Route::get('login/facebook/callback', 'Auth\FacebookController@handleProviderCallback');

/**
 * Routes pour les saisons
 */
// Route::prefix('saison')
//     ->group(function () {
//         Route::get('{saisonSlug}', function($saisonSlug) {
//             echo $saisonSlug;
//         });
//     });

Route::get('/', 'HomeController@index')
    ->name('home');

/**
 * Routes pour les ligues
 */
// route d'inscription, crée une ligue, une equipe et un user
Route::get('rejoindre', 'LigueController@ajouter')->name('ajoutLigue');
Route::get('inscription', 'LigueController@ajouter')->name('ajoutLigueBis');

Route::prefix('ligue')
    ->group(function () {
        Route::get('afficher/{idLigue}', 'LigueController@index');
        Route::post('add', 'LigueController@add')
            ->name('addLigue');
    });

// Equipes
Route::get('equipe/desactiver', 'EquipeController@deactivate')->name('equipe.deactivate');
Route::get('equipe/retirerjoueur', 'EquipeController@removePlayer')->name('equipe.removePlayer');
Route::post('equipe/ajouterjoueur', 'EquipeController@addPlayer')->name('equipe.addPlayer');
Route::post('equipe/creer', 'EquipeController@store')->name('equipe.store');
Route::put('equipe/modifier-capitaine', 'EquipeController@updateCapitaine')->name('equipe.updateCapitaine');
Route::put('equipe/modifier-nom', 'EquipeController@updateName')->name('equipe.updateName');
Route::put('equipe/modifier-logo', 'EquipeController@updateLogo')->name('equipe.updateLogo');

Route::get('/changer-equipe', 'HomeController@switchTeam')->name('switchTeam');
Route::get('/changer-saison', 'HomeController@switchSaison')->name('switchSaison');


// Saisons
Route::get('saisons', 'SaisonController@index')->name('saison.index');
Route::get('saisons/creer', 'SaisonController@create')->name('saison.create');
Route::post('saisons/creer', 'SaisonController@store')->name('saison.store');

// Matchs
Route::post('match', 'MatchController@save');
Route::get('matchs', 'MatchController@index')->name('matchs.index');
Route::get('matchs/creer', 'MatchController@create')->name('matchs.create');
Route::get('matchs/editer', 'MatchController@create')->name('matchs.edit');
Route::post('matchs/creer', 'MatchController@store')->name('matchs.store');
Route::get('matchs/supprimer', 'MatchController@destroy')->name('matchs.destroy');

/**
 * Routes pour les invitations
 */
Route::prefix('invitation')
    ->group(function () {

        // Invitation à rejoindre une equipe
        Route::post('rejoindreEquipe', 'InvitationController@rejoindreEquipe')
            ->name('inviterAmisDansEquipe');

        // Invitation à créer une equipe
        Route::post('creerEquipe', 'InvitationController@creerEquipe')
            ->name('inviterAmiACreerEquipe');
    });

Route::get('/{ligue?}', 'HomeController@index')->name('currentLigue');

/*Route::post('', function() {
    Mail::to('lolo@gmail.com')->send(new InviterAmisDansEquipe);
})->name('inviterAmisDansEquipe');*/

/*Test editer un form :
>>>>>>> 3944fb3db548d55bcc717bed683229ba67e2bab7
Route::get('tests', 'TestController@index');
Route::get('tests/create', 'TestController@create' );
Route::get('tests/{id}', 'TestController@show' );
Route::post('tests', 'TestController@store');
Route::get('tests/{id}/edit', 'TestController@edit');*/

//Route::get('/test', 'TestController@test');

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








