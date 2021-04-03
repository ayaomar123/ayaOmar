<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class FrontQuestionController extends Controller
{
    public function index()
    {
            $questions = Question::with('answers')->get();
            return view('front.quiz', compact('questions'));
    }

    public function store(Request $request){
        $user= Auth::user();
        $requestData = $request->all();
        foreach($requestData['question_id'] as $qid){
                $qanswer = $requestData['q' . $qid];
                Result::create([
                        'user_id' => $user->id,
                        'question_id' => $qid,
                        'answer_id' => $qanswer,
                    ]
                );

        }
        Session::flash("msg","s: تمت الإجابة بنجاح");
        return redirect()->route('getResult');
    }

    public function showQuiz(){
        if (auth()->user()) {
            $questions = Question::with('answers')->get();
            return view('front.ComputerQuiz', compact('questions'));
        } else {
            session()->flash('msg', 's:قم بتسجيل الدخول كي تتمكن من حل اختبار القدرات');
            return view('auth.login');
        }
    }
}
