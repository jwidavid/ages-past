<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation_records', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('from_id');
			$table->integer('for_id');
			$table->integer('pack_id');
			$table->integer('order_id');						
			$table->string('payer_email', 250);

			$table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('donation_records');
    }
}
