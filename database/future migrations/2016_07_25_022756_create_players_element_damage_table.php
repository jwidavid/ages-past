<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersElementDamageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players_element_damage', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('players_id')->index();
            $table->smallInteger('fire');
            $table->smallInteger('water');
            $table->smallInteger('earth');
            $table->smallInteger('lightning');
            $table->smallInteger('wind');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('players_element_damage');
    }
}
