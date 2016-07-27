<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clans', function (Blueprint $table) {
            $table->increments('id');            
			$table->string('name', 50)->unique();
			$table->integer('owner_id')->index();
			$table->integer('coowner_id')->index();
			$table->string('icon', 250);
			$table->string('logo', 250);
			$table->smallInteger('level')->default(1);
			$table->integer('points');
			$table->integer('experience');
			$table->tinyInteger('tax');
			$table->boolean('interest_on');
			$table->string('password');
			$table->text('story');
			$table->string('requirements', 500);
			$table->string('offer', 500);
			$table->string('owner_message', 250);

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
        Schema::drop('clans');
    }
}
