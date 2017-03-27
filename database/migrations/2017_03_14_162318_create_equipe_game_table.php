<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipeGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipe_game', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('equipe_id');
            $table->unsignedInteger('game_id');
            $table->unsignedInteger('buts')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipe_game');
    }
}
