<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Question;

class QuestionController extends Controller
{
    //
    public function index()
    {
        $questions = Question::get();
        return view('questions', ['questions' => $questions]);
    }
}
