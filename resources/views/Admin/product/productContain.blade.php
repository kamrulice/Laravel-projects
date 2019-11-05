@extends('Admin.master')
@section('title')
    Manage Product
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
                    <th width="10%">Chapter Name</th>
                    <th width="20%">Chapter Title</th>
                    <th width="40%">Chapter Description</th>
                    <th width="10%">Publication Status</th>
                    <th width="10%">Action</th>
                </tr>
                @foreach($products as $product)
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td>{{$product->chapterName}}</td>
                        <td>{{$product->title}}</td>
                        <td>{{$product->chapterDescription}}</td>
                        <td>{{$product->publicationStatus ==1 ? 'Published':'Unpublished'}}</td>
                        <td>
                            <a href="{{url('/edit/chapter/'.$product->id )}}" class="btn btn-success" title="Edit chapter name">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                            <a href="{{url('/delete/chapter/'.$product->id)}}" class="btn btn-danger" title="Delete chapter Name"
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

