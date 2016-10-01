<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChequesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cheques', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('card_id');
            $table->integer('company_id');
            $table->integer('tradepoint_id');
            $table->float('sum_total');
            $table->float('sum_clear');
            $table->float('sum_powerup');
            $table->dateTime('cheque_datetime');
            $table->dateTime('scan_datetime');
            $table->dateTime('confirm_datetime');
            $table->text('scanned_qr');
            $table->float('cashback');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cheques');
    }
}
