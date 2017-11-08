<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTeamRelationsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('team_game', function (Blueprint $table) {
        $table->renameColumn('equipe_id', 'team_id');
        $table->renameColumn('buts', 'goals');
    });
    Schema::table('team_league', function (Blueprint $table) {
        $table->renameColumn('equipe_id', 'team_id');
        $table->renameColumn('ligue_id', 'league_id');
    });
    Schema::table('team_user', function (Blueprint $table) {
        $table->renameColumn('equipe_id', 'team_id');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('team_game', function (Blueprint $table) {
      $table->renameColumn('team_id', 'equipe_id');
      $table->renameColumn('goals', 'buts');
    });
    Schema::table('team_league', function (Blueprint $table) {
        $table->renameColumn('team_id', 'equipe_id');
        $table->renameColumn('league_id', 'ligue_id');
    });
    Schema::table('team_user', function (Blueprint $table) {
        $table->renameColumn('team_id', 'equipe_id');
    });
  }
}
