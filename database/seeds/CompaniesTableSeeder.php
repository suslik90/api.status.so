<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'Киржач-хлеб',
            'name_jur' => 'ОАО Киржач-хлеб',
            'address_jur' => 'Россия, Владимирская обл., г. Киржач, ул. Сосновая, д. 18',
            'phone_contact' => '84852345678',
            'email_contact' => 'kirzhach-hleb@gmail.com',
            'cheque_avg' => 120.09,
            'money_earned_total' => 1000.01,
            'money_thresold_current' => 500
        ]);
    }
}
