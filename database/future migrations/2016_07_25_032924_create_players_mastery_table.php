<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersMasteryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players_mastery', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('players_id')->index();
			$table->tinyInteger('balance');
			$table->tinyInteger('health');
			$table->tinyInteger('power');
			$table->tinyInteger('patience');
			$table->tinyInteger('patience_total');
			$table->tinyInteger('fire');
			$table->tinyInteger('water');
			$table->tinyInteger('earth');
			$table->tinyInteger('lightning');
			$table->tinyInteger('wind');

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
        Schema::drop('players_mastery');
    }
}
