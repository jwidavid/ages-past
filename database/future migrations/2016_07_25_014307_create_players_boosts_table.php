<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersBoostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players_boosts', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('players_id')->index();
			$table->tinyInteger('battles');
			$table->tinyInteger('mines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('players_boosts');
    }
}
