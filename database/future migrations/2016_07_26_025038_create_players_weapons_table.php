<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersWeaponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players_weapons', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('players_id')->index();
			$table->integer('weapons_id')->index();
			$table->integer('clans_id')->index()->nullable();
			$table->tinyInteger('level');
			$table->smallInteger('damage_min');
			$table->smallInteger('damage_max');
			$table->integer('players_gems_id')->nullable();	
			$table->boolean('is_equipped')->index();
			$table->smallInteger('firedmg');
			$table->smallInteger('waterdmg');
			$table->smallInteger('earthdmg');
			$table->smallInteger('lightningdmg');
			$table->smallInteger('winddmg');			
						
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
        Schema::drop('players_weapons');
    }
}
