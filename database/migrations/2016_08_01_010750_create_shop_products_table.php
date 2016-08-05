<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_products', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('shop_id')->unsigned()->index();
			$table->integer('weapon_template_id')->unsigned()->nullable();
			$table->integer('armor_template_id')->unsigned()->nullable();
			$table->integer('item_template_id')->unsigned()->nullable();
			$table->integer('cost')->unsigned();
			$table->enum('currency', array('coins','bronze','silver','gold','platinum','tickets'))->default('coins');

			// Set foreign key constraints
            $table->foreign('shop_id')
                ->references('id')->on('shops')
                ->onDelete('cascade');

			// Set foreign key constraints
            $table->foreign('weapon_template_id')
                ->references('id')->on('weapon_templates')
                ->onDelete('cascade');

            // Set foreign key constraints
            $table->foreign('armor_template_id')
                ->references('id')->on('armor_templates')
                ->onDelete('cascade');

            // Set foreign key constraints
            $table->foreign('item_template_id')
                ->references('id')->on('item_templates')
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
        Schema::drop('shop_products');
    }
}
