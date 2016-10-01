<?php

use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([
            'company_id' => 1,
            'reg_datetime' => date('Y-m-d H:i:s'),
            'objective_join' => 0
        ]);
    }
}
