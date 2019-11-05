<div class="col-lg-3 col-md-12 col-sm-12  height-body bg ">
        <div class="card border-0 ">

            <div class="card-footer ">
                <ul class="list-group list-group-flush ">
                    @foreach($chapterById as $chapter)
                    <li class="list-group-item"><a href="{{url('/show/Details/'.$chapter->id)}}" class="text-decoration-none h-a  ">{{$chapter->chapterName}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>