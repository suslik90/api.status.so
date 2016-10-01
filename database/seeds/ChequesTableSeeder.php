<?php

use Illuminate\Database\Seeder;

class ChequesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cheques')->insert([
            'user_id' => 1,
            'card_id' => 1,
            'company_id' => 1,
            'tradepoint_id' => 1,
            'sum_total' => 800.67,
            'sum_clear' => 500,
            'sum_powerup' => 0.67,
            'cheque_datetime' => date('Y-m-d H:i:s'),
            'scan_datetime' => date('Y-m-d H:i:s'),
            'confirm_datetime' => date('Y-m-d H:i:s'),
            'scanned_qr' => '00000034342873892',
            'cashback' => 0.67
        ]);
    }
}
