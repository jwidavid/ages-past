<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters_resources', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('character_id')->unsigned()->index();
            $table->integer('coins')->unsigned()->default(50);
            $table->integer('bronze')->unsigned();
            $table->integer('silver')->unsigned();
            $table->integer('gold')->unsigned();
            $table->integer('platinum')->unsigned();
            $table->integer('ore_copper')->unsigned();
            $table->integer('ore_silver')->unsigned();
            $table->integer('ore_gold')->unsigned();
            
            // Set foreign key constraints
            $table->foreign('character_id')
                ->references('id')->on('characters')
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
        Schema::drop('characters_resources');
    }
}
