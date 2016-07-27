<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationPacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation_packs', function (Blueprint $table) {
            $table->increments('id');
			$table->string('button_id', 50);
			$table->string('name', 50);
			$table->tinyInteger('cost');
			$table->smallInteger('valerian');
			$table->smallInteger('tickets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('donation_packs');
    }
}
