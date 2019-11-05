<?php

namespace App\Http\Controllers;

use App\Registration;
use Illuminate\Http\Request;
use App\Product;
use App\Chapter;
use App\Question;

class WelcomeController extends Controller
{
    public function index(){
    	return view('fontEnd.home.homeContent');
    }

     public function productDetails($id){
        $chapterById = Product::where('chapterId',$id)
                    ->where('publicationStatus',1)
                    ->first();
//        echo '<pre>';
//         print_r($chapterById);
//         exit();
       return view('fontEnd.home.showDetailsContain',['chapterById'=>$chapterById]);
    }

}


