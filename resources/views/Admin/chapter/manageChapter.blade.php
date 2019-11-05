@extends('Admin.master')
@section('title')
    Manage Chapter
@endsection
@section('Contain')
    <hr/>
    <div class="row">
        <div class="col-lg-12">
    <h3 class="text-center text-success  alert alert-success ">{{Session::get('message')}}</h3>
    <hr/>
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th width="5%">ID</th>
            <th width="20%">Chapter Name</th>
            <th width="40%">Chapter Description</th>
            <th width="20%">Publication Status</th>
            <th width="15%">Action</th>
        </tr>
        @foreach($chapters as $chapter)
        <tr>
            <th scope="row">{{$chapter->id}}</th>
            <td>{{$chapter->chapterName}}</td>
            <td>{{$chapter->chapterDescription}}</td>
            <td>{{$chapter->publicationStatus ==1 ? 'Published':'Unpublished'}}</td>
            <td>
                <a href="{{url('/edit/chapter/'.$chapter->id )}}" class="btn btn-success" title="Edit chapter name">
                    <span class="glyphicon glyphicon-edit"></span>
                </a>
                <a href="{{url('/delete/chapter/'.$chapter->id)}}" class="btn btn-danger" title="Delete chapter Name"
                onclick="return confirm('Are sure want to delete')">
                    <span class="glyphicon glyphicon-trash"></span>
                </a>
            </td>
        </tr>
            @endforeach
        </thead>
    </table>
        </div>
    </div>
@endsection



