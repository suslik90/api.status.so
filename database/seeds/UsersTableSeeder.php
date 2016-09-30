<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'login' => 'ururu',
            'pwd_md5' => '827ccb0eea8a706c4c34a16891f84e7b',
            'surname' => 'Петр',
            'firstname' => 'Тарасов',
            'secondname' => '',
            'timezone_current' => '',
            'birthday_date' => date('d.m.Y'),
            'registered_datetime' => date('d.m.Y H:i:s'),
            'lastseen_datetime' => date('d.m.Y H:i:s'),
            'interests' => '',
            'phone' => '+79001239087',
            'imei' => '',
            'imsi' => '',
            'email' => 'ururu@gmail.com',
            'money_spent_total' => 10.00,
            'cheque_avg' => 800.00,
            'money_spent_thresold' => 15.00,
            'cashback_total' => 100.00,
            'city_id' => 1,
            'country_id' => 1,
            'district' => '',
            'favorites' => ''
        ]);
    }
}
