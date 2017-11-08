<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSeasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('seasons', function (Blueprint $table) {
          $table->renameColumn('nom', 'name');
          $table->renameColumn('ligue_id', 'league_id');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('seasons', function (Blueprint $table) {
        $table->renameColumn('name', 'nom');
        $table->renameColumn('league_id', 'ligue_id');
      });
    }
}
