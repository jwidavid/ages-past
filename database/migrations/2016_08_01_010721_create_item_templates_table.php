<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_templates', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name', 50);
			$table->text('description');
			$table->tinyInteger('uses')->nullable();
			$table->string('image', 250);
			$table->smallInteger('image_height');
			$table->string('type', 21);
			$table->smallInteger('weight');
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
        Schema::drop('item_templates');
    }
}
