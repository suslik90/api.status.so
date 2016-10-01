<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'src_user_id' => 1,
            'dst_user_id' => 2,
            'friend_id' => 1,
            'text' => 'Hello world!',
            'send_datetime' => date('Y-m-d- H:i:s'),
            'recieved_datetime' => date('Y-m-d- H:i:s'),
            'read_datetime' => date('Y-m-d- H:i:s')
        ]);
    }
}
