<?php

namespace App\Http\Controllers;
use App\Chapter;
use Illuminate\Http\Request;
use DB;

class chapterController extends Controller
{
   public function createChapter(){
       return view('Admin.chapter.chapterContain');
   }
   public function storeChapter(Request $request){
      // return $request->all();
//       $chapter = new Chapter();
//       $chapter->chapterName = $request->chapterName;
//       $chapter->chapterDescription = $request->chapterDescription;
//       $chapter->publicationStatus = $request->publicationStatus;
//       $chapter->save();
//       return 'info save successfully';
//       Chapter::create($request->all());
//       return 'Information save successfully';
       DB::table('Chapters')->insert([
           'chapterName' => $request->chapterName,
           'chapterDescription' => $request->chapterDescription,
           'publicationStatus' => $request->publicationStatus,

       ]);
       return redirect('/add/chapter')->with('message','Chapter Info save Successfully');
   }
   public function manageChapter(){
       $chapters = Chapter::all();
       return view('Admin.chapter.manageChapter',['chapters'=> $chapters]);
   }
   public function editChapter($id){
       $chapterById = Chapter::where('id',$id)->first() ;
       return view('Admin.chapter.editChapter',['chapterById'=>$chapterById]);
   }
   public function updateChapter(Request $request){
       $chapter = Chapter::find($request->id);
       $chapter->chapterName = $request->chapterName ;
       $chapter->chapterDescription = $request->chapterDescription ;
       $chapter->publicationStatus = $request->publicationStatus ;
       $chapter->save();
       return redirect('/manage/chapter')->with('message','Chapter info update successfully');
   }
   public function deleteChapter($id){
       $chapter = Chapter::find($id);
       $chapter->delete();
       return redirect( '/manage/chapter ')->with('message','chapter delete successfully');
   }
}

