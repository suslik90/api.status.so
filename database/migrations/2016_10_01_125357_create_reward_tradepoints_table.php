<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRewardTradepointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reward_tradepoints', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reward_supplier_id');
            $table->text('name');
            $table->text('address_text');
            $table->text('address_geocoord');
            $table->text('phone');
            $table->text('work_hours');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reward_tradepoints');
    }
}
