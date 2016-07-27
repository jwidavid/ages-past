<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeaponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weapons', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('players_id')->index();
			$table->tinyInteger('weapons_class_id')->index();
			$table->string('name', 50);	
			$table->text('description');
			$table->tinyInteger('level');
			$table->smallInteger('damage_low');
			$table->smallInteger('damage_high');
			$table->smallInteger('weight');
			$table->boolean('is_equipped');
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
        Schema::drop('weapons');
    }
}
