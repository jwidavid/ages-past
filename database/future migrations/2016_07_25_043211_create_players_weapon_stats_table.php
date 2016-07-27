<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersWeaponStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players_weapon_stats', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('players_id')->index();
			$table->double('class_axe', 5, 2)->default(1);
			$table->double('class_bow', 5, 2)->default(1);
			$table->double('class_claw', 5, 2)->default(1);
			$table->double('class_dagger', 5, 2)->default(1);
			$table->double('class_spear', 5, 2)->default(1);
			$table->double('class_sword', 5, 2)->default(1);
			$table->double('class_whip', 5, 2)->default(1);
			$table->double('experience_axe', 5, 2);
			$table->double('experience_bow', 5, 2);
			$table->double('experience_claw', 5, 2);
			$table->double('experience_dagger', 5, 2);
			$table->double('experience_spear', 5, 2);
			$table->double('experience_sword', 5, 2);
			$table->double('experience_whip', 5, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('players_weapon_stats');
    }
}
