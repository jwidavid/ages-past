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
			$table->string('name', 50)->unique();
            $table->string('class');
			$table->text('description');
			$table->tinyInteger('level')->unsigned()->default(1);
			$table->smallInteger('damage_min')->unsigned();
			$table->smallInteger('damage_max')->unsigned();
			$table->smallInteger('weight')->unsigned();			
			$table->smallInteger('firedmg')->unsigned();
			$table->smallInteger('waterdmg')->unsigned();
			$table->smallInteger('earthdmg')->unsigned();
			$table->smallInteger('lightningdmg')->unsigned();
			$table->smallInteger('winddmg')->unsigned();
            $table->string('image', 250);
            $table->smallInteger('image_height')->unsigned();
            $table->text('misc')->nullable();
			
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
