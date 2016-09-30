<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            Schema::dropIfExists('users');
        });

        Schema::create('users', function (Blueprint $table) {

            $table->increments('id');
            $table->text('login');
            $table->text('pwd_md5');
            $table->text('surname');
            $table->text('firstname');
            $table->text('secondname');
            $table->text('timezone_current');
            $table->date('birthday_date');
            $table->dateTime('registered_datetime');
            $table->dateTime('lastseen_datetime');
            $table->text('interests');
            $table->text('phone');
            $table->text('imei');
            $table->text('imsi');
            $table->text('email');
            $table->float('money_spent_total');
            $table->float('cheque_avg');
            $table->float('money_spent_thresold');
            $table->float('cashback_total');
            $table->integer('city_id');
            $table->integer('country_id');
            $table->text('district');
            $table->text('favorites');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

        });
    }
}
