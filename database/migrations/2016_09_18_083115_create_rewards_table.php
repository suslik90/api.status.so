<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRewardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rewards', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('reward_supplier_id');
            $table->text('code_1c');
            $table->float('price');
            $table->text('photo_url');
            $table->text('text');
            $table->date('date_from');
            $table->date('date_to');
            $table->integer('count');
            $table->text('possible_tradepoints');
            $table->float('rating');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rewards');
    }
}
