<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClansLendingRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clans_lending_records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clans_id')->index();
            $table->integer('players_id')->index();           			
			$table->integer('coins');
			$table->integer('bronze');
			$table->integer('silver');
			$table->integer('gold');
			$table->integer('platinum');
			
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
        Schema::drop('clans_lending_records');
    }
}
