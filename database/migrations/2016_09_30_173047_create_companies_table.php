<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('name_jur');
            $table->text('address_jur');
            $table->text('phone_contact');
            $table->text('email_contact');
            $table->float('cheque_avg');
            $table->float('money_earned_total');
            $table->float('money_thresold_current');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('companies');
    }
}
