<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();            
			$table->string('name', 21);
			$table->string('name_color')->nullable();
			$table->boolean('gender')->index();
			$table->tinyInteger('element_id')->unsigned()->index();
			$table->integer('level')->unsigned()->index()->default(1);
			$table->integer('level_experience')->unsigned();
			$table->integer('element_level')->unsigned()->default(1);
			$table->integer('element_experience')->unsigned();
			$table->integer('health')->unsigned()->default(75);
			$table->integer('health_max')->unsigned()->default(75);
			$table->smallInteger('stamina')->unsigned()->default(220);
			$table->smallInteger('stamina_max')->unsigned()->default(220);
			$table->tinyInteger('points_ability')->unsigned()->default(8);
			$table->tinyInteger('points_element')->unsigned()->default(1);
			$table->tinyInteger('points_special')->unsigned()->default(1);
			$table->smallInteger('strength')->unsigned()->default(5);
			$table->smallInteger('endurance')->unsigned()->default(5);
			$table->smallInteger('agility')->unsigned()->default(5);
			$table->smallInteger('perception')->unsigned()->default(5);
			$table->integer('wins')->unsigned();
			$table->integer('losses')->unsigned();
			$table->integer('potion_jug')->unsigned()->default(150);
			$table->integer('potion_jug_max')->unsigned()->default(150);
						
            $table->timestamp('created_at')->useCurrent();
            
            // Set foreign key constraints
            $table->foreign('user_id')
            	->references('id')->on('users')
            	->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('characters');
    }
}
