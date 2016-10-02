<?php

use Illuminate\Database\Seeder;

class UserSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_settings')->insert([
            'user_id' => 1,
            'privacy_who_can_write' => 2,
            'privacy_who_can_visit' => 1,
            'privacy_who_can_ask_friendship' => 1
        ]);
    }
}
