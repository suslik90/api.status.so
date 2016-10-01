<?php

use Illuminate\Database\Seeder;

class TradepointsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tradepoints')->insert([
            'company_id' => 1,
            'name' => 'Ларек у входа',
            'address_text' => 'Дом ветеранов, к. 100500',
            'address_geocoord' => '{lat:53.4563, lang: 30.1345}',
            'phone' => '+7800345278',
            'work_hours' => 'с 9.00 до 17.00',
            'cheque_avg' => 100.01,
            'customers_new' => ''
        ]);
    }
}
