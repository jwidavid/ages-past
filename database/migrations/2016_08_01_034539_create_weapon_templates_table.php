<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeaponTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weapon_templates', function (Blueprint $table) {
            $table->increments('id');
			$table->string('class');
			$table->string('name', 50);
			$table->text('description');
			$table->tinyInteger('level');
			$table->smallInteger('damage_low');
			$table->smallInteger('damage_high');
			$table->smallInteger('weight');			
			$table->smallInteger('firedmg');
			$table->smallInteger('waterdmg');
			$table->smallInteger('earthdmg');
			$table->smallInteger('lightningdmg');
			$table->smallInteger('winddmg');
			
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
        Schema::drop('weapon_templates');
    }
}
