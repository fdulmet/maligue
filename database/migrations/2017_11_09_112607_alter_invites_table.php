<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterInvitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('invites', function (Blueprint $table) {
          $table->dropColumn('is_registered', 'invitation_type');
          $table->string('token', 32)->index();
          $table->boolean('consumed')->default(false);
          $table->integer('from_user')->unsigned();
          $table->integer('team_id')->unsigned()->nullable()->default(null);
          $table->integer('league_id')->unsigned()->nullable()->default(null);
      });
      Schema::rename('invites', 'invitations');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::rename('invitations', 'invites');
      Schema::table('invites', function (Blueprint $table) {
        $table->dropColumn('team_id', 'league_id', 'token');
        $table->boolean('is_registered');
        $table->string('invitation_type');
      });
    }
}
