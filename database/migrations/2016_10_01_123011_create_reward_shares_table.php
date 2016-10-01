<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRewardSharesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reward_shares', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('old_user_reward_id');
            $table->integer('new_user_reward_id');
            $table->text('reason');
            $table->text('datetime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reward_shares');
    }
}
