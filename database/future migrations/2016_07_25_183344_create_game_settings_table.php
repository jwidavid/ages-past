<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_settings', function (Blueprint $table) {
            $table->increments('id');
			$table->double('donation_total');
			$table->double('donation_required');
			$table->double('donation_event_total');
			$table->double('donation_event_required');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('game_settings');
    }
}
