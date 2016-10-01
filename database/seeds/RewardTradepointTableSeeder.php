<?php

use Illuminate\Database\Seeder;

class RewardTradepointTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reward_tradepoints')->insert([
            'reward_supplier_id' => 1,
            'name' => 'Ларек у входа',
            'address_text' => 'Дом ветеранов, к. 100500',
            'address_geocoord' => '{lat:53.4563, lang: 30.1345}',
            'phone' => '+7800345278',
            'work_hours' => 'с 9.00 до 17.00'
        ]);
    }
}
