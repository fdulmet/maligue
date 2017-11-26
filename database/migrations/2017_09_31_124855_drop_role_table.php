<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::dropIfExists('roles');
      Schema::dropIfExists('role_user');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::create('roles', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name')->unique();
          $table->string('title')->nullable();
          $table->integer('level')->unsigned()->nullable();
          $table->timestamps();
      });

      Schema::create('role_user', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('role_id');
          $table->unsignedInteger('user_id');
          $table->timestamps();
      });
    }
}
