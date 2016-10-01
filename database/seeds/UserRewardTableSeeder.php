<?php

use Illuminate\Database\Seeder;

class UserRewardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_rewards')->insert([
            'user_id' => 1,
            'reward_id' => 2,
            'reward_supplier_id' => 1,
            'first_owner_id' => 1,
            'percent' => 43,
            'state' => 'deposited',
            'datetime' => date('Y-m-d- H:i:s'),
            'tradepoint_id' => 1,
            'staff_id' => 1,
            'rating' => 1
        ]);
    }
}
