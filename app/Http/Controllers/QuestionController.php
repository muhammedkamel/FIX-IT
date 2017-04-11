<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
class QuestionController extends Controller
{

    public function index(){
        return view('questions');
    }

    public function showQuestion($id){
        $question = Question::find($id);
        return view('question', compact('question'));
    }
}
