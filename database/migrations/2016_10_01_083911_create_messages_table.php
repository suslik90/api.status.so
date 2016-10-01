<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('src_user_id');
            $table->integer('dst_user_id');
            $table->integer('friend_id');
            $table->text('text');
            $table->dateTime('send_datetime');
            $table->dateTime('recieved_datetime');
            $table->dateTime('read_datetime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('messages');
    }
}
