<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClansResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clans_resources', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('players_id')->index();
			$table->integer('energy');
			$table->integer('coins');
			$table->integer('bronze');
			$table->integer('silver');
			$table->integer('gold');
			$table->integer('platinum');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clans_resources');
    }
}
