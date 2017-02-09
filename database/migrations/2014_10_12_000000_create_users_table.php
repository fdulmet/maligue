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
            //$table->integer('IDequipe')->unsigned();//c'est une foreign key(pourquoi pas foreign à la place de integer ?)
            //unsigned means that it needs to be positive
            $table->string('nom');
            $table->string('prenom');
            $table->string('equipe');
            //$table->boolean('capitaine');
            //$table->string ('tel');//mettre que pour capitaines (string pour pas que ça vire le 0 du début) ?
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            //$table->foreign('IDequipe')->references('id')->on('equipes')->onDelete('cascade');

        });
    }

        //Schema::enableForeignKeyConstraints();
        //Schema::disableForeignKeyConstraints();

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Schema::table('users', function(Blueprint $table) {
            $table->dropForeign(['IDequipe']);
        });*/

        Schema::dropIfExists('users');
    }
}
