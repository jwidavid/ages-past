<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementsSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elements_skills', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name', 21);
			$table->string('element', 21);
			$table->tinyInteger('level');
			$table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('elements_skills');
    }
}
