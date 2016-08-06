<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->unique();            
            $table->string('description', 150);
            $table->text('body');
            $table->tinyinteger('difficulty')->unsigned();
            $table->string('icon', 100);
            $table->integer('reward')->unsigned();
            $table->enum('currency', array('coins','bronze','silver','gold','platinum'));
            $table->boolean('is_active')->index()->default(1);
            
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
        Schema::drop('quests');
    }
}
