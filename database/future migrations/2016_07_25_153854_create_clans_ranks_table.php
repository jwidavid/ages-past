<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClansRanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clans_ranks', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('clans_id')->index();
			$table->string('rank1', 50)->default('Rank 1');
			$table->string('rank2', 50)->default('Rank 2');
			$table->string('rank3', 50)->default('Rank 3');
			$table->string('rank4', 50)->default('Rank 4');
			$table->string('rank5', 50)->default('Rank 5');
			$table->string('rank6', 50)->default('Rank 6');
			$table->string('rank7', 50)->default('Rank 7');
			$table->string('rank8', 50)->default('Rank 8');
			$table->string('rank9', 50)->default('Rank 9');
			$table->string('rank10', 50)->default('Rank 10');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clans_ranks');
    }
}
