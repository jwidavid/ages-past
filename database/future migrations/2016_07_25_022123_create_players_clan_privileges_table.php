<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersClanPrivilegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players_clan_privileges', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('players_id')->index();            
			$table->tinyInteger('clan_privileges_id')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('players_clan_privileges');
    }
}
