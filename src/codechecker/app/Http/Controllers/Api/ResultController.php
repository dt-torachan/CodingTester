<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CodeExecuter;

class ResultController extends Controller
{
    public function index(Request $request,CodeExecuter $codeexecutor, $question_id, $env)
    {
        $data = $request->all();

        $result = $codeexecutor->run($data);
        
        if ($question_id <= 1) {
            return response()->json([
                'code'     => 200,
                'question_id' => $question_id,
                'env' => $env,
                'out' => $result,
              ], 200);
        } else {
            return response()->json([
                'code'     => 404,
                'question_id' => $question_id,
                'env' => $env
              ], 404);
        }
    }
}
