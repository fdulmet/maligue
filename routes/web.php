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

Route::get('/', function () {
  /* show /league/season/team > dashboard */
  /* if no team > create team */
    return view('welcome');
});

Route::group([
  'as' => 'league.',
  'prefix' => 'league',
  'middleware' => [
    // 'auth:web',
  ],
], function () {
  Route::post('/', [
    'as' => 'store',
    'uses' => 'LeagueController@store',
  ]);
  Route::get('/create', [
    'as' => 'create',
    'uses' => 'LeagueController@create',
  ]);
  Route::group([
    'prefix' => '{leagueSlug}',
  ], function() {
    Route::post('/invite', [
      'as' => 'invite',
      'uses' => 'InvitationController@createTeam',
    ]);
    Route::group([
      'as' => 'season.',
      'prefix' => 'season',
      'middleware' => [],
    ], function () {
      Route::get('/', [
        'as' => 'index',
        'uses' => 'SeasonController@index',
      ]);
      Route::get('/create', [
        'as' => 'create',
        'uses' => 'SeasonController@create',
      ]);
      Route::post('/create', [
        'as' => 'store',
        'uses' => 'SeasonController@store',
      ]);
      Route::group([
        'prefix' => '{seasonSlug}',
      ], function () {
        Route::get('/', [
          'as' => 'edit',
          'uses' => 'SeasonController@edit',
        ]);
        Route::post('/', [
          'as' => 'update',
          'uses' => 'SeasonController@update',
        ]);
        Route::post('/delete', [
          'as' => 'edit',
          'uses' => 'SeasonController@delete',
        ]);
        Route::group([
          'as' => 'team.',
          'prefix' => 'team/{teamSlug}',
          'middleware' => [],
        ], function () {
          Route::get('/', [
            'as' => 'dashboard',
            'uses'  => 'DashboardController@index',
          ]);
          Route::post('/', [
            'as' => 'attachTeam',
            'uses' => 'LeagueController@attachTeam',
          ]);
          Route::post('delete', [
            'as' => 'detachTeam',
            'uses' => 'LeagueController@detachTeam',
          ]);
        });
        Route::group([
          'as' => 'game.',
          'prefix' => 'game',
          'middleware' => [],
        ], function () {
          Route::get('/', [
            'as' => 'index',
            'uses' => 'GameController@index',
          ]);
          Route::get('/create', [
            'as' => 'create',
            'uses' => 'GameController@create',
            ]);
          Route::post('/create', [
          'as' => 'store',
          'uses' => 'GameController@store',
          ]);
          Route::get('/{gameId}', [
          'as' => 'edit',
          'uses' => 'GameController@edit',
          ]);
          Route::post('/{gameId}', [
          'as' => 'update',
          'uses' => 'GameController@update',
          ]);
          Route::get('/{gameId}/delete', [
          'as' => 'delete',
          'uses' => 'GameController@delete',
          ]);
          });
        });
      });
  });
});
Route::group([
  'as' => 'team.',
  'prefix' => 'team',
  'middleware' => [],
], function () {
  Route::get('create', [
    'as' => 'create',
    'uses' => 'TeamController@create',
  ]);
  Route::post('create', [
    'as' => 'create',
    'uses' => 'TeamController@store',
  ]);
  Route::group([
    'prefix' => '{teamSlug}',
  ], function() {
    Route::post('/', [
      'as' => 'update',
      'uses' => 'TeamController@update',
    ]);
    Route::post('invite', [
      'as' => 'invite',
      'uses' => 'InvitationController@createPlayer',
    ]);
    Route::post('delete', [
      'as' => 'delete',
      'uses' => 'TeamController@delete',
    ]);
    Route::group([
      'prefix' => 'player/{playerId}'
    ], function() {
      Route::post('/', [
        'as' => 'attachPlayer',
        'uses' => 'TeamController@attachPlayer',
      ]);
      Route::post('/delete', [
        'as' => 'detachPlayer',
        'uses' => 'TeamController@detachPlayer',
      ]);
    });
  });

});
Route::group([
  'as' => 'user.',
  'prefix' => 'user/{id}',
  'middleware' => [],
], function () {
  Route::get('/', [
    'as' => 'edit',
    'uses' => 'UserController@edit',
  ]);
  Route::post('/', [
    'as' => 'update',
    'uses' => 'UserController@update',
  ]);
  Route::post('/delete', [
    'as' => 'delete',
    'uses' => 'UserController@delete',
  ]);
});
Route::get('/confirm/{token}', [
  'as' => 'invitation.confirm',
  'uses' => 'InvitationController@confirm',
]);
Route::post('/confirm/{token}', [
  'as' => 'invitation.register',
  'uses' => 'InvitationController@register',
]);
/*
POST /league > créer une ligue
GET /league/{slug}/season > liste des saisons
POST /league/{slug}/season > create season
GET /league/{slug}/season/{slug}/ > dashboard
POST /league/{slug}/invite > inviter à creer une équipe dans la ligue
GET /league/{slug}/team > liste des équipes
POST /league/{slug}/team/{id} > ajouter une équipe dans la ligue
DELETE /league/{slug}/team/{id} > supprimer une équipe de la ligue
GET /match > liste des matchs
POST /match > créer un match
DELETE /match/{id} > supprimer un match
PATCH /match/{id} > maj match
GET /team > liste des équipe
POST /team > créer une équipe
PATCH /team/{id} > update équipe
GET /team/{id} > voir une équipe
DELETE /team/{id} > supprimer une équipe
POST /team/{id}/invite > inviter à rejoindre un équipe
POST /team/{id}/player/{id} > ajouter un joueur dans l'équipe
DELETE /team/{id}/player/{id} > supprimer un joueur dans l'équipe
GET /user > liste des utilisateurs
PATCH /user/{id} > maj user
DELETE /user/{id} > supprimer un joueur
POST /register > créer un utilisateur

*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
