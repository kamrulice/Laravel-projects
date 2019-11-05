@extends('Admin.master')
@section('title')
    Edit Chapter
@endsection
@section('Contain')
    <hr/>
    <div class="row">
        <div class="col-lg-12">

            <hr/>
            <div class="well">
                <form role="form" class="form-horizontal" action="{{url('/update/Chapter')}}" method="POST" enctype="multipart/form-data" name="editChapterForm">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-form-label col-sm-2">Chapter Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="chapterName" class="form-control" value="{{$chapterById->chapterName}}">
                            <input type="hidden" name="id" class="form-control" value="{{$chapterById->id}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label col-sm-2">Chapter Description</label>
                        <div class="col-sm-10">
                            <textarea name="chapterDescription" class="form-control" rows="8"> {{$chapterById->chapterDescription}}</textarea>
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
                            <button type="submit" name="btn" class="btn btn-success btn-block">Update Chapter Info</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.forms['editChapterForm'].elements['publicationStatus'].value = {{$chapterById->publicationStatus}}
    </script>
@endsection













