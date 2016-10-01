<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRewardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_rewards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('reward_id');
            $table->integer('reward_supplier_id');
            $table->integer('first_owner_id');
            $table->float('percent');
            $table->text('state');
            $table->dateTime('datetime');
            $table->integer('tradepoint_id');
            $table->integer('staff_id');
            $table->integer('rating');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_rewards');
    }
}
