<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('company_id');
            $table->dateTime('start_datetime');
            $table->dateTime('last_usage_datetime');
            $table->float('money_spent_total');
            $table->float('cheque_avg');
            $table->float('multiplicator');
            $table->integer('level');
            $table->float('money_spent_thresold');
            $table->float('balance_current');
            $table->float('balance_debt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cards');
    }
}
