<?php

use Illuminate\Database\Seeder;

class PowerupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('powerups')->insert([
            'company_id' => 1,
            'title' => 'New Powerup',
            'photo_url' => '',
            'cashback' => 3,
            'code_1c' => '00000000000002',
            'possible_tradepoints' => '[1,34,12,1234,33]',
            'date_from' => date('Y-m-d'),
            'date_to' => date('Y-m-d'),
            'category' => 'super'
        ]);
    }
}
