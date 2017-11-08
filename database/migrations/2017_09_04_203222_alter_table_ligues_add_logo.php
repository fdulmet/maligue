<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableLiguesAddLogo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ligues', function (Blueprint $table) {
            $table->string('logo')->nullable()->after('sport');
            $table->string('status')->nullable()->after('logo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ligues', function (Blueprint $table) {
            $table->dropColumn(['logo', 'status']);
        });
    }
}
