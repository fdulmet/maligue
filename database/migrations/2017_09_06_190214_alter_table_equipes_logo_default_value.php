<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableEquipesLogoDefaultValue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('equipes', function (Blueprint $table) {
            $table->string('logo')->default('images/logo-default.svg')->change();
        });

        Schema::table('ligues', function (Blueprint $table) {
            $table->string('logo')->default('images/logo-default.svg')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('equipes', function ($table) {
            DB::statement('ALTER TABLE' . $table . 'ALTER COLUMN logo DROP DEFAULT');
        });

        Schema::table('ligues', function ($table) {
            DB::statement('ALTER TABLE' . $table . 'ALTER COLUMN logo DROP DEFAULT');
        });
    }
}
