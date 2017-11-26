<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTeamsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('teams', function (Blueprint $table) {
        $table->renameColumn('nom', 'name');
        $table->string('sheet_url', 1024)->nullable()->default(null);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('teams', function (Blueprint $table) {
      $table->renameColumn('name', 'nom');
      $table->dropColumn('sheet_url');
    });
  }
}
