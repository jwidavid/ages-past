<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersMinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players_mines', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('players_id')->index();
			$table->smallInteger('operations')->default(10);
			$table->text('layout')->nullable();
			$table->smallInteger('floor')->default(1);
			$table->smallInteger('miners')->default(1);
			$table->smallInteger('senses_bronze')->default(1);
			$table->smallInteger('senses_silver')->default(1);
			$table->smallInteger('senses_gold');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('players_mines');
    }
}
