<?php

use Illuminate\Database\Seeder;

class RewardSuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reward_suppliers')->insert([
            'name' => 'Саломон',
            'name_jur' => 'ОАО Саломон',
            'address_jur' => 'Россия, Ивановская обл., г. Пупок, ул. Сосновая, д. 28',
            'address_fact' => 'Россия, Ивановская обл., г. Пупок, ул. Сосновая, д. 28',
            'city_id' => 1,
            'country_id' => 7,
            'staff' => 'главарь',
            'staff_name' => 'Игорёк',
            'phone_contact' => '848534123431',
            'email_contact' => 'seller@solomon.com',
            'discount' => 12,
            'money_earned_total' => 1000,
            'debt' => 500
        ]);

    }
}
