<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players_skills', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('players_id')->index();
			$table->tinyInteger('skills_id')->index();
			$table->tinyInteger('level');
			
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
        Schema::drop('players_skills');
    }
}
