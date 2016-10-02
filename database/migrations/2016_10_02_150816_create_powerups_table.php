<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePowerupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('powerups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->text('title');
            $table->text('photo_url');
            $table->float('cashback');
            $table->text('code_1c');
            $table->text('possible_tradepoints');
            $table->date('date_from');
            $table->date('date_to');
            $table->text('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('powerups');
    }
}
