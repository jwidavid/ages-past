<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArmorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armors', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name', 50);
			$table->string('description', 250);
			$table->smallInteger('defense');
			$table->smallInteger('weight');
			$table->boolean('is_slotted')->index();
			$table->string('image', 250);
			$table->smallInteger('image_height');			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('armors');
    }
}
