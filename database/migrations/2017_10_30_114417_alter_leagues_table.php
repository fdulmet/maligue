<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterLeaguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('leagues', function (Blueprint $table) {
          $table->renameColumn('nom', 'name');
          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')
              ->references('id')
              ->on('users');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('leagues', function (Blueprint $table) {
        $table->renameColumn('name', 'nom');
        $table->dropColumn('owner');
      });
    }
}
