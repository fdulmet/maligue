<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Containers\Game\Models\Game;
use Carbon\Carbon;

class AlterGamesNormalizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::table('games', function (Blueprint $table) {
         $table->renameColumn('lieu', 'place');
         $table->dropForeign(['ligue_id']);
         $table->renameColumn('ligue_id', 'league_id');
         $table->foreign('league_id')
             ->references('id')
             ->on('leagues');
         $table->date('date')->nullable()->default(null)->change();
         $table->time('heure')->nullable()->default(null)->change();
       });
       Schema::table('games', function (Blueprint $table) {
         $table->string('field')->nullable()->default(null)->after('place');
         $table->dateTimeTz('when')->after('field');
         $table->boolean('canceled')->after('id')->default(false);
         $table->integer('initial_game')->unsigned()->nullable();
       });
       /* Logic date + time to timestampTz */
      foreach (Game::all() as $game) {
        $when = Carbon::createFromFormat('Y-m-d H:i:s', "{$game->date} {$game->heure}", 'Europe/Paris');
        $game->update([
          'when' => $when,
        ]);
        if ($game->lieu_report !== null && $game->date_report !== null && $game->heure_report !== null) {
          Game::create([
            'place' => $game->lieu_report,
            'league_id' => $game->league_id,
            'season_id' => $game->season_id,
            'when' => Carbon::createFromFormat('Y-m-d H:i:s', "{$game->date_report} {$game->heure_report}", 'Europe/Paris'),
            'initial_game' => $game->id,
          ]);
          $game->update([
            'canceled' => true,
          ]);
        }
      }
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
       Schema::table('games', function (Blueprint $table) {
         $table->dropColumn(['when', 'field', 'canceled', 'initial_game']);
         $table->renameColumn('place', 'lieu');
         $table->renameColumn('league_id', 'ligue_id');
         $table->dropForeign(['league_id']);
         $table->foreign('ligue_id')
             ->references('id')
             ->on('leagues');
       });
     }
}
