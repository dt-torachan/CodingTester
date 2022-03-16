<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    //
    public function index(Request $request, $question_id, $env)
    {
        if ($question_id <= 1) {
            return response()->json([
                'code'     => 200,
                'question_id' => $question_id,
                'env' => $env
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
