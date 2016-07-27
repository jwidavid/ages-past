<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecializationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specializations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type', 50);
            $table->tinyInteger('level');
            $table->string('name', 50);
            $table->string('description', 250);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('specializations');
    }
}
