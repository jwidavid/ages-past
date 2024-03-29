<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_template_id')->unsigned()->index();
            $table->integer('character_id')->unsigned()->index()->nullable();
            $table->integer('clan_id')->unsigned()->index()->nullable();
			$table->tinyInteger('uses')->nullable();
			
			$table->timestamp('created_at')->useCurrent();
			
			// Set foreign key constraints
            $table->foreign('item_template_id')
                ->references('id')->on('item_templates')
                ->onDelete('cascade');
            
            $table->foreign('character_id')
                ->references('id')->on('characters')
                ->onDelete('cascade');
            
            $table->foreign('clan_id')
                ->references('id')->on('clans')
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
        Schema::drop('items');
    }
}
