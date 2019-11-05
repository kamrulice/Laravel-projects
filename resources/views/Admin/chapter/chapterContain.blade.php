@extends('Admin.master')
@section('title')
    Add Chapter
    @endsection
@section('Contain')
    <hr/>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center text-success alert alert-success">{{Session::get('message')}}</h3>
            <hr/>
            <div class="well">
                <form role="form" class="form-horizontal" action="{{url('/save/Chapter')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-form-label col-sm-2">Chapter Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="chapterName" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label col-sm-2">Chapter Description</label>
                        <div class="col-sm-10">
                            <textarea name="chapterDescription" class="form-control" rows="8"></textarea>
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
                            <button type="submit" name="btn" class="btn btn-success btn-block">Save Chapter Info</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection













