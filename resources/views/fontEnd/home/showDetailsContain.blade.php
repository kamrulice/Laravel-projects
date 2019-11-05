 @extends('fontEnd.master')
 @section('title')
 Show Details
 @endsection
 @section('homeContain')
 <div class="card col-lg-9">
     <div class="card-header text-center bg-success text-light"><b>Chapter Name:</b>&nbsp;{{$chapterById->title}}</div>
     <div class="card-body">{{$chapterById->chapterDescription}}</div>
 </div>
 @endsection
 