<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRewardSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reward_suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('name_jur');
            $table->text('address_jur');
            $table->text('address_fact');
            $table->integer('city_id');
            $table->integer('country_id');
            $table->text('staff');
            $table->text('staff_name');
            $table->text('phone_contact');
            $table->text('email_contact');
            $table->float('discount');
            $table->float('money_earned_total');
            $table->float('debt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reward_suppliers');
    }
}
