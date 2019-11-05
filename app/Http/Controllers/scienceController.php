<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validate;
use Illuminate\Http\Request;
use App\Science;

class scienceController extends Controller
{
    public function addSciencetist(){
        return view('Admin.science.scienceContain');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required',
            'invention'=>'required',
            'dob'=>'required',
            'dob'=>'required',
        ]);
        $sciencetistImage = $request->file('image');
        $imageName = $sciencetistImage->getClientOriginalName();
        $uploadPath = 'public/sciencetistImage/';
        $sciencetistImage->move($uploadPath,$imageName);
        $imageUrl = $uploadPath.$imageName;
        Science::create([
            'name'=> request('name'),
            'country'=> request('country'),
            'invention'=> request('invention'),
            'image' => $imageUrl,
            'dob'=> request('dob'),
            'description'=> request('description'),
            'dod'=> request('dod'),
            'publicationStatus'=> request('publicationStatus'),
        ]);
        return redirect('/add/বিজ্ঞানী')->with('message','save successfully');
    }
    public function manage(){
        $sciences = Science::all();
        return view('Admin.science.sciencemanage',compact('sciences'));
    }
}
