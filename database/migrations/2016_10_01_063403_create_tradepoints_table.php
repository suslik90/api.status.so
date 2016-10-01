<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradepointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tradepoints', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->text('name');
            $table->text('address_text');
            $table->text('address_geocoord');
            $table->text('phone');
            $table->text('work_hours');
            $table->float('cheque_avg');
            $table->text('customers_new');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tradepoints');
    }
}
