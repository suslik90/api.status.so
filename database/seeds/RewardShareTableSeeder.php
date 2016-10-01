<?php

use Illuminate\Database\Seeder;

class RewardShareTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reward_shares')->insert([
            'old_user_reward_id' => 1,
            'new_user_reward_id' => 2,
            'reason' => 'К пиву',
            'datetime' => date('Y-m-d H:i:s')
        ]);
    }
}
