<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArmorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('armor_template_id')->unsigned()->index();
            $table->integer('character_id')->unsigned()->index()->nullable();
            $table->integer('clan_id')->unsigned()->index()->nullable();
            $table->smallInteger('defense');
            $table->integer('character_gem_id')->unsigned()->nullable();
            $table->boolean('is_equipped')->index();
            $table->smallInteger('fireres')->unsigned();
            $table->smallInteger('waterres')->unsigned();
            $table->smallInteger('earthres')->unsigned();
            $table->smallInteger('lightningres')->unsigned();
            $table->smallInteger('windres')->unsigned();
                        
            $table->timestamp('created_at')->useCurrent();
            
            // Set foreign key constraints
            $table->foreign('armor_template_id')
                ->references('id')->on('armor_templates')
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
        Schema::drop('armors');
    }
}
