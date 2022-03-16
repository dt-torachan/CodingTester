<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckAnswerController extends Controller
{
    public function index($question_id)
    {
        // 送信データ
        $data = array(
            "key1" => "value1",
            "key2" => "value2",
            "key3" => "value3"
        );

        // URLエンコードされたクエリ文字列を生成
        $data = http_build_query($data, "", "&");

        // ストリームコンテキストのオプションを作成
        $options = array(
                // HTTPコンテキストオプションをセット
                'http' => array(
                    'method'=> 'POST',
                    // 'header'=> 'Content-Type: application/x-www-form-urlencoded',
                    'content' => $data
                )
        );

        // ストリームコンテキストの作成
        $context = stream_context_create($options);

        // POST送信
        $responce = file_get_contents('http://localhost:81/api/sample/1/test', false, $context);

        // reception.php のレスポンスを表示
        echo $contents;
    }
}
