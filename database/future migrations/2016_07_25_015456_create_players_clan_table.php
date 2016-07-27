<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersClanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('players_clan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('players_id')->index();            			
			$table->integer('clans_id')->nullable()->index();
			$table->tinyInteger('rank')->default(10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('players_clan');
    }
}
