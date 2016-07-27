<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersArmorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players_armors', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('players_id')->index();
			$table->integer('armors_id')->index();
			$table->integer('clans_id')->index()->nullable();
			$table->tinyInteger('level');
			$table->smallInteger('defense');
			$table->integer('players_gems_id')->nullable();
			$table->boolean('is_equipped')->index();
			$table->smallInteger('fireres');
			$table->smallInteger('waterres');
			$table->smallInteger('earthres');
			$table->smallInteger('lightningres');
			$table->smallInteger('windres');
						
			$table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('players_armors');
    }
}
