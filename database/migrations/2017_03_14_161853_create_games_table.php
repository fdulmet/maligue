<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->string ('lieu');
            $table->date('date');
            $table->time('heure');
            $table->string ('lieu_report');
            $table->date('date_report');
            $table->time('heure_report');
            $table->integer('ligue_id')->unsigned();
            $table->foreign('ligue_id')
                ->references('id')
                ->on('ligues');
            $table->integer('season_id')->unsigned();
            $table->foreign('season_id')
                ->references('id')
                ->on('seasons');
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
        Schema::dropIfExists('games');
    }
}
