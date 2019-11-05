@extends('Admin.master')
@section('title')
Edit question
@endsection
@section('Contain')
<hr/>
<div class="row">
    <div class="col-lg-12">

        <hr/>
        <div class="well">
            <form role="form" class="form-horizontal" action="{{url('/update/question')}}" method="POST" enctype="multipart/form-data" name="editQuestionForm">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="col-form-label col-sm-2">Question Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="questionName" class="form-control" value="{{$editQuestion->questionName}}">
                        <input type="hidden" name="id" class="form-control" value="{{$editQuestion->id}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label col-sm-2">Chapter Description</label>
                    <div class="col-sm-10">
                        <textarea name="questionAnswer" class="form-control" rows="8"> {{$editQuestion->questionAnswer}}</textarea>
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
                        <button type="submit" name="btn" class="btn btn-success btn-block">Update Question Info </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    document.forms['editQuestionForm'].elements['publicationStatus'].value = {{$editQuestion->publicationStatus}}
</script>
@endsection
