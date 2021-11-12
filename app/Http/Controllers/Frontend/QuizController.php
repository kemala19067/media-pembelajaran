<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Quizes;
class QuizController extends Controller
{
    public function index()
    {
    	 $quizes=Quizes::orderBy('id','desc')->paginate(30);
        return view('frontend.exam.quiz_list',compact('quizes'));
    }
}
