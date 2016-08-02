<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArmorTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armor_templates', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name', 50);	
			$table->text('description');
			$table->tinyInteger('level');
			$table->smallInteger('defense');
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
        Schema::drop('armor_templates');
    }
}
