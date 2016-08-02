<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeaponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weapons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('weapon_template_id')->unsigned()->index();
            $table->integer('character_id')->unsigned()->index()->nullable();
            $table->integer('clan_id')->unsigned()->index()->nullable();
            $table->smallInteger('damage_min')->unsigned();
            $table->smallInteger('damage_max')->unsigned();
            $table->integer('character_gem_id')->unsigned()->nullable(); 
            $table->boolean('is_equipped')->index();
            $table->smallInteger('firedmg')->unsigned();
            $table->smallInteger('waterdmg')->unsigned();
            $table->smallInteger('earthdmg')->unsigned();
            $table->smallInteger('lightningdmg')->unsigned();
            $table->smallInteger('winddmg')->unsigned();
            
            $table->timestamp('created_at')->useCurrent();
            
            // Set foreign key constraints
            $table->foreign('weapon_template_id')
                ->references('id')->on('weapon_templates')
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
        Schema::drop('weapons');
    }
}
