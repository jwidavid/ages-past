<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersWorldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players_world', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('players_id')->index();
			$table->smallInteger('x')->default(1);
			$table->smallInteger('y')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('players_world');
    }
}
