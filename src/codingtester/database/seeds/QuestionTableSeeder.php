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
            'title' => 'Loop Basics',
            'lead'  => 'ループの基礎を確認しましょう',
            'photo'  => '/photo/basic.jpg',
            'prerequisites'  => '正の整数 N が標準入力から入力されるので、N 個の「*」を繋げた文字列を出力するプログラムを作成しましょう。<br>例えば N = 3の場合<br><p class="codeblock">***</p>のように出力してください。',
            'input'  => '入力は以下のフォーマットで、正の整数N が入力されます。<br><p class="codeblock">N</p>入力値最終行の末尾に改行が１つ入ります。',
            'output'  => '出力最終行の末尾に改行を入れ、余計な文字、空行を含んではいけません。',
            'conditions'  => 'すべてのテストケースで以下の条件を満たします。<br>1 ≦ N ≦ 100',
            'input_example1'  => '4',
            'output_example1'  => '****',
            'input_example2'  => '6',
            'output_example2'  => '******',
            'remarks'  => '',
         ]);
    }
}
