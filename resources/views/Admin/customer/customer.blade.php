@extends('Admin.master')
@section('title')
    Customer
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
                    <th width="5%">ID</th>
                    <th width="10%">FirstName</th>
                    <th width="20%">LastName</th>
                    <th width="40%">Email</th>
                    <th width="10%">Action</th>
                </tr>
                @foreach($customers as $customer)
                    <tr>
                        <th scope="row">{{$customer->id}}</th>
                        <td>{{$customer->firstName}}</td>
                        <td>{{$customer->lastName}}</td>
                        <td>{{$customer->email}}</td>

                        <td>
                            <a href="{{url('/delete/customer/'.$customer->id)}}" class="btn btn-danger" title="Delete customer"
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
