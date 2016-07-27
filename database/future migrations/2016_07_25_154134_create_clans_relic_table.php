<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClansRelicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clans_relic', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('clans_id')->index();
			$table->string('name', 50);
			$table->smallInteger('level');
			$table->float('strength');
			$table->float('endurance');
			$table->float('agility');
			$table->float('perception');
			$table->boolean('energy_pool_active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clans_relic');
    }
}
