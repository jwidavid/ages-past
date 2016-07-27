<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersItemSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players_item_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('players_id')->index();
            $table->boolean('ankh_battle');
            $table->boolean('ankh_forest');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('players_item_settings');
    }
}
