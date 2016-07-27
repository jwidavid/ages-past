<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players_resources', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('players_id')->index();
			$table->integer('coins')->default(50);
			$table->integer('bronze');
			$table->integer('silver');
			$table->integer('gold');
			$table->integer('platinum');
			$table->integer('ore_copper');
			$table->integer('ore_silver');
			$table->integer('ore_gold');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('players_resources');
    }
}
