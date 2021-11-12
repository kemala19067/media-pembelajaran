<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Quizes;
use App\Model\Questions;
use App\Model\Exams;
use App\Model\Results;
use Sentinel;
class ExamController extends Controller
{
  public function __construct()
  {
    return $this->middleware('member');
  }
   public function quizList()
    {
        $quizes=Quizes::orderBy('id','desc')->paginate(30);
        return view('frontend.exam.quiz_list',compact('quizes'));
    }
    public function exam($id)
    {
       $quiz=Quizes::where('id',$id)->where('status',1)->first();
 
      $questions=Questions::inRandomOrder()->limit($quiz->number_of_question)->where('quizes_id',$quiz->id)->get();
      return view('frontend.exam.exam',compact('questions','quiz'));

     
    }
    public function examPost(Request $request)
    {
      $userId=Sentinel::getUser()->id;
      $date=date('Y-m-d');
        $yes=0;
        $no=0;
       $data=$request->all();
      
       for($i=1; $i<=$request->index;$i++){
           if(isset($data['questions_id'.$i])){
           
            $exam=new Exams;
        
               $question=Questions::where('id',$data['questions_id'.$i])->get()->first();
               if($question->answer==$data['ans'.$i])
               {
                   $result[$data['questions_id'.$i]]='Yes';
                   $exam->is_ans="yes";
                   $yes++;
               }else{
                   $result[$data['questions_id'.$i]]='No';
                   $exam->is_ans="No";
                   $no++;
               }
          $exam->user_id= $userId;
            $exam->quizes_id= $question->quizes_id;
               $exam->questions_id=$data['questions_id'.$i];
               $exam->ans=$data['ans'.$i];

               $exam->save();

           }
           
       }

       if($res=Results::where('user_id',$userId)->where('quizes_id',$request->quizes_id)->first()){

       }else{
        $res=new Results;
       }
       $res->user_id= $userId;
       $res->quizes_id= $request->quizes_id;
       $res->date= $date;
       $res->yes_ans=$yes;
       $res->no_ans=$no;
       
       $res->save();

       return redirect('/MyExamResult')->with('success','Thaks For Join This Exam');

    }

    public function examResult()
    {
       $userId=Sentinel::getUser()->id;
      $results=Results::orderBy('id','desc')->where('user_id',$userId)->paginate(10);
      return view('frontend.exam.result',compact('results'));
    }
     public function ResultDetails($id)
    {
        $userId=Sentinel::getUser()->id;
       $exams=Exams::where('user_id', $userId)->where('quizes_id',$id)->get();
       $quiz=Quizes::find($id);
       $questions=Questions::where('quizes_id',$id)->get();
      return view('frontend.exam.resultDetails',compact('exams','quiz','questions'));
    }
}
 