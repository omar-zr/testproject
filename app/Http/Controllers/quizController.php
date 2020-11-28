<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class quizController extends Controller
{
    public function index()
    {
        $quizzes = DB::select('select * from quizzes ');
        return view('Quiz.index',['quizzes' => $quizzes]);
    }
    public function answer(Request $request)
    {
        $counter =0;
        $q =quiz::get()->count();
        for ($i=0; $i < $q; $i++) {
            $counter+= $request->get('a_'.$i);
        }
         return view('Quiz.score',['r'=>$counter]);
    }
}
