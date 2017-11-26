<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTablesName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('equipes', 'teams');
        Schema::rename('ligues', 'leagues');
        Schema::rename('equipe_game', 'team_game');
        Schema::rename('equipe_ligue', 'team_league');
        Schema::rename('equipe_user', 'team_user');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('teams', 'equipes');
        Schema::rename('leagues', 'ligues');
        Schema::rename('team_game', 'equipe_game');
        Schema::rename('team_league', 'equipe_ligue');
        Schema::rename('team_user', 'equipe_user');
    }
}
