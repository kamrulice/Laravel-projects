@extends('fontEnd.master')
@section('title')
    Short Question
@endsection
@section('homeContain')
    <div class="card col-lg-9">
        <div class="card-header text-center bg-info text-light">Short Question List</div>
        <div class="card-body">
            <table class="table table-hover">
                 <tbody>

                 @foreach($shortQuestions as $shortQuestion)
                 <tr>

                    <td> {{$shortQuestion->id}}.&nbsp;{{$shortQuestion->questionName}}</td>
                 </tr>
                 <tr>
                     <td>{{$shortQuestion->questionAnswer}}</td>
                 </tr>

                     @endforeach
                 </tbody>
            </table>
            {{$shortQuestions->links()}}
        </div>
    </div>
    @endsection
