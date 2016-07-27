<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersNavigationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players_navigation', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('players_id')->index();
			$table->string('starting_page')->default('news.php');
			$table->string('link1')->nullable();
			$table->string('link2')->nullable();
			$table->string('link3')->nullable();
			$table->string('link4')->nullable();
			$table->string('link5')->nullable();
			$table->string('desc1')->nullable();
			$table->string('desc2')->nullable();
			$table->string('desc3')->nullable();
			$table->string('desc4')->nullable();
			$table->string('desc5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('players_navigation');
    }
}
