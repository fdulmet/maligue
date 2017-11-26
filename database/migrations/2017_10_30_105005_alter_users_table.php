<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users', function (Blueprint $table) {
          $table->renameColumn('nom', 'last_name');
          $table->renameColumn('prenom', 'first_name');
          $table->renameColumn('tel', 'phone');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('users', function (Blueprint $table) {
        $table->renameColumn('last_name', 'nom');
        $table->renameColumn('first_name', 'prenom');
        $table->renameColumn('phone', 'tel');
      });
    }
}
