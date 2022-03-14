<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'title' => 'FizzBuzz',
            'lead'  => 'プログラミングの基礎、FizzBuzzを解いてみましょう',
            'body'  => 'FizzBuzz',
         ]);
    }
}
