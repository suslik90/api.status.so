<?php

use Illuminate\Database\Seeder;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
            'user_id' => 1,
            'company_id' => 1,
            'start_datetime' => date('Y-m-d H:i:s'),
            'last_usage_datetime' => date('Y-m-d H:i:s'),
            'money_spent_total' => 150.55,
            'cheque_avg' => 120.09,
            'multiplicator' => 6,
            'level' => 5,
            'money_spent_thresold'=> 3.5,
            'balance_current'=>108,
            'balance_debt'=>80
        ]);
    }
}
