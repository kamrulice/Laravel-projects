@extends('Admin.master')
@section('title')
    Add product
@endsection
@section('Contain')
    <hr/>
    <div class="row">
        <div class="col-lg-12">
            @if(Session::has('message'))
            <h3 class="text-center text-success alert alert-success">{{Session::get('message')}}</h3>
            @endif
            <hr/>
            <div class="well">
                <form role="form" class="form-horizontal" action="{{url('/save/বিজ্ঞানী')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-form-label col-sm-2">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label col-sm-2">Country Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="country" class="form-control"  >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label col-sm-2">Invention</label>
                        <div class="col-sm-10">
                            <input type="text" name="invention" class="form-control"  >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label col-sm-2">Image</label>
                        <div class="col-sm-10">
                            <input type="file" name="image" class="form-control-file"  >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label col-sm-2">Date of Birth</label>
                        <div class="col-sm-10">
                            <input type="text" name="dob" class="form-control"  >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label col-sm-2">Description</label>
                        <div class="col-sm-10">
                            <textarea name="description" class="form-control" rows="8"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label col-sm-2">Date of Died</label>
                        <div class="col-sm-10">
                            <input type="text" name="dod" class="form-control"  >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label col-sm-2">Publication Status</label>
                        <div class="col-sm-10">
                            <select type="text" name="publicationStatus"  class="form-control">
                                <option>Select Publication Status</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="btn" class="btn btn-info btn-block">Save Info</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


