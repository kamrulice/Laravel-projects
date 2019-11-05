@extends('Admin.master')
@section('title')
    Manage Product
@endsection
@section('Contain')
    <hr/>
    <div class="row">
        <div class="col-lg-12">
            @if(Session::has('message'))
            <h3 class="text-center text-success  alert alert-success ">{{Session::get('message')}}</h3>
            @endif
            <hr/>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>

                    <th width="5%">Image</th>
                    <th width="10%">Name</th>
                    <th width="10%">Country</th>
                    <th width="5%">Birth</th>
                    <th width="20%">Invention</th>
                    <th width="20%">Description</th>
                    <th width="5%">Died</th>
                    <th width="10%">Status</th>
                    <th width="15%">Action</th>
                </tr>
                @foreach($sciences as $science)
                    <tr>

                        <th scope="row"><img src="{{asset($science->image)}}" width="50" height="50"> </th>
                        <td>{{$science->name}}</td>
                        <td>{{$science->country}}</td>
                        <td>{{$science->dob}}</td>
                        <td>{{$science->invention}}</td>

                        <td>{{str_limit($science->description,10)}}</td>
                        <td>{{$science->dod}}</td>
                        <td>{{$science->publicationStatus ==1 ? 'Published':'Unpublished'}}</td>
                        <td>
                            <a href="{{url('/edit/chapter/'.$science->id )}}" class="btn btn-success" title="Edit chapter name">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                            <a href="{{url('/delete/chapter/'.$science->id)}}" class="btn btn-danger" title="Delete chapter Name"
                               onclick="return confirm('Are sure want to delete')">
                                <span class="glyphicon glyphicon-trash"></span>
                            </a>
                            <a href="{{url('/delete/chapter/'.$science->id)}}" class="btn btn-info" title="view Details"
                               onclick="return confirm('Are sure want to delete')">
                                <span class="glyphicon glyphicon-eye-open"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </thead>
            </table>
        </div>
    </div>
@endsection

