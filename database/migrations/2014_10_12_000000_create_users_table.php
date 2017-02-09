<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string ('prenom');
            $table->boolean('capitaine');
            $table->string ('tel');//mettre que pour capitaines (string pour pas que ça vire le 0 du début) ?
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        //Schema::table('users', function (Blueprint $table) {
            //$table->integer('IDequipe')->unsigned();
            //$table->foreign('IDequipe')->references('id')->on('equipes');

            //$table->onDelete('cascade'); Call to undefined method Illuminate\Database\Schema\Blueprint::onDelete()

        //Schema::enableForeignKeyConstraints();
        //Schema::disableForeignKeyConstraints();
        //});
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::table('users', function(Blueprint $table) {
            //$table->dropForeign(['IDequipe']);
        //});

        Schema::dropIfExists('users');
    }
}
