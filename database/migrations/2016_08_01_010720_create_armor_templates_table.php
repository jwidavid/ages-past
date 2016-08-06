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
			$table->string('name', 50)->unique();	
			$table->text('description');
			$table->tinyInteger('level')->unsigned()->default(1);
			$table->smallInteger('defense')->unsigned();
			$table->smallInteger('weight')->unsigned();		
			$table->smallInteger('fireres')->unsigned();
			$table->smallInteger('waterres')->unsigned();
			$table->smallInteger('earthres')->unsigned();
			$table->smallInteger('lightningres')->unsigned();
			$table->smallInteger('windres')->unsigned();
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
        Schema::drop('armor_templates');
    }
}
