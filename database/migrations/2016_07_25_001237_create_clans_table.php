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
            $table->integer('character_id')->unsigned()->index();
            $table->string('icon', 250)->nullable();
            $table->string('logo', 250)->nullable();
            $table->smallInteger('level')->default(1);
            $table->integer('points')->unsigned();
            $table->integer('experience')->unsigned();
            $table->tinyInteger('tax')->unsigned();
            $table->boolean('interest_on');
            $table->string('password');
            $table->text('story');
            $table->text('requirements');
            $table->text('offer');
            $table->string('owner_message', 250);

            $table->timestamp('created_at')->useCurrent();
            
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
        Schema::drop('clans');
    }
}
