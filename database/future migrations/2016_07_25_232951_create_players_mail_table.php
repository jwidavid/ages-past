<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersMailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players_mail', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('players_id')->index();			
			$table->integer('sender_id')->index();
			$table->boolean('is_unread')->default(1);
			$table->string('subject', 150);						
			$table->text('body');
			
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
        Schema::drop('players_mail');
    }
}
