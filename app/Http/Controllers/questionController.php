<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class questionController extends Controller
{
    public function addQuestion(){
        return view('Admin.question.questionContain');
    }
    public function storeQuestion(Request $request){
        $question = new Question();
        $question->questionName = $request->questionName;
         $question->questionAnswer = $request->questionAnswer;
          $question->save();
         return redirect()->back()->with('message','Question save successfully');
    }
    public function manageQuestion(){
        $questions = Question::paginate(10);
        return view('Admin.question.manageQuestion',['questions'=>$questions]);
    }
    public function editQuestion($id){
        $editQuestion = Question::where('id',$id)->first();
        return view('Admin.question.editQuestion',['editQuestion'=>$editQuestion]);
    }
    public function updateQuestion(Request $request){
        $updateById = Question::find($request->id);
        $updateById->questionName = $request->questionName;
         $updateById->questionAnswer = $request->questionAnswer;
         $updateById->save();
         return redirect('/manage/question')->with('message','Question update successfully');
    }
    public function shortQuestion(){
        $shortQuestions = Question::paginate(10);
      //  return dd($shortQuestions);
       return view('fontEnd.home.shortQuestionContent',compact('shortQuestions'));
    }
}
