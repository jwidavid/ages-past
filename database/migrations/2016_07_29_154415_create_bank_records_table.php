<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('character_id')->unsigned()->index();
            $table->integer('coins')->unsigned()->default(100);
            $table->integer('coins_max')->unsigned()->default(2500);
            $table->integer('bronze')->unsigned();
            $table->integer('bronze_max')->unsigned()->default(200);
            $table->integer('silver')->unsigned();
            $table->integer('silver_max')->unsigned()->default(200);
            $table->integer('gold')->unsigned();
            $table->integer('gold_max')->unsigned()->default(90);
            $table->integer('platinum')->unsigned();
            $table->integer('platinum_max')->unsigned()->default(180);
            
            // Set foreign key constraints
            $table->foreign('character_id')
                ->references('id')->on('characters')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bank_records');
    }
}