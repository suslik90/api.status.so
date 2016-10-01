<?php

use Illuminate\Database\Seeder;

class FeedbackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feedbacks')->insert([
            'user_reward_id' => 1,
            'reward_supplier_id' => 2,
            'rating' => 1,
            'text' => 'ЗыБыСь',
            'rating_datetime' => date('Y-m-d H:i:s'),
            'answer' => 'Gooooooooood',
            'answer_datetime' => date('Y-m-d H:i:s')
        ]);
    }
}
