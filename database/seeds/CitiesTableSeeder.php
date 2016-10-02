<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            'country_id' => 1,
            'name' => 'Замбезия',
            'coord' => '{lat: 543.334, lang:43.234}'

        ]);
    }
}
