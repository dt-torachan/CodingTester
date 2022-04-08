<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Question;

class QuestionDetailController extends Controller
{
    //
    public function index($question_id)
    {
        $question = Question::find($question_id);
        return view('pages.questions.detail', ['question' => $question]);
    }
}
