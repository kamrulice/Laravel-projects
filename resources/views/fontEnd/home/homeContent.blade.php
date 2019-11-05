 @extends('fontEnd.master')
 @section('title')
 Home
 @endsection
 @section('homeContain')
  <div class="col-lg-6 col-md-12 col-sm-12 height-body bg mb-2 ">
        <div class="card bg-light">
            <div class="card-header">
                <h2 class="card-text text-justify text-muted" style="font-size:25px; ">
                    Jabir Ibn Hayyan is the Father of Modern Chemistry – And Here’s What He Taught the World
                </h2>
            </div>
            <div class="card-body">
                <img src="{{asset('public/fontEnd/img/img1.jpg')}}" class="card-img-top"/>
                <p class="text-body text-justify  text-muted">Chemistry is a natural science which
                    studies the structure of matter, chemical changes occurring under certain circumstances and
                    the regularities that can be drawn from that.
                    Muslim scientists have deepened their knowledge in this domain as well. However, rather than
                    learning about their fundamental contributions from scientific databases, their ideas are only
                    to be found in fictional novels. This is due to many people’s incorrect image of the Arabs’ way
                    of doing chemical research.
                </p>
            </div>
        </div>
    </div>
     <!-- end col-2 -->
      <!-- col-3 -->
    <div class="col-lg-3 col-md-6 col-sm-12  height-body bg ">
        <div class="row mt-2">
            <div class="card col-lg-12">

                    <p class="text-center mt-2">Basic short question</p>

                <div class="card-footer">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <marquee direction="up" onmouseover="stop()" onmouseout="start()">
                        @foreach($questionById as $question)
                            <p class="text-info"><a href="{{url('short/question'.$question->id)}}" class="text-decoration-none h-p">{{$question->questionName}}</a></p>
                            @endforeach
                            </marquee>
                        </li>
                    </ul>

                </div>
                </div>
        </div>
    </div>



     <div class="row">
            <div class="project" id="demos">

                    <div class="">
                        <div class="">
                            <div class="owl-carousel owl-theme">
                                <div>
                                    <img src="{{asset('public/fontEnd/img/img1.jpg')}}" class="slide-image" alt="" >
                                </div>
                                <div>
                                    <img src="{{asset('public/fontEnd/img/img2.jpg')}}" class="slide-image" alt=""  >
                                </div>
                                <div>
                                    <img src="{{asset('public/fontEnd/img/img5.jpg')}}" class="slide-image" alt="">
                                </div>
                                <div>
                                    <img src="{{asset('public/fontEnd/img/img7.jpg')}}" class="slide-image" alt=""  >
                                </div>
                                <div>
                                    <img src="{{asset('public/fontEnd/img/img6.jpg')}}" class="slide-image" alt="" >
                                </div>

                            </div>

                        </div>
                    </div>

            </div>
        </div>
<!-- end slider -->
<!-- Cupon -->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12  ">
        <div class="row mt-4 mb-4">
            <div class="card col-lg-3 bg-primary ">
                <div class="card-header">
                    <img src="{{asset('public/fontEnd/img/img7.jpg')}}" class="card-img-top rounded-circle img-fluid" width="100">

                </div>
                <div class="card-body">
                    <p class="card-text text-justify text-white ">learning about their fundamental from scientific
                        databases, their ideas are only
                        to be found in fictional novels. This is due to many people’s incorrect.</p>

                </div>
                <div class="card-footer">
                    <button class="card-link float-right btn btn-info btn-block">Read More</button>
                </div>
            </div>
            <div class="card col-lg-3 bg-warning">
                <div class="card-header">
                    <img src="{{asset('public/fontEnd/img/img2.jpg')}}" class="card-img-top rounded-circle">

                </div>
                <div class="card-body">
                    <p class="card-text text-justify text-white">learning about their fundamental from scientific
                        databases, their ideas are only
                        to be found in fictional novels. This is due to many people’s incorrect.</p>

                </div>
                <div class="card-footer">
                    <button class="card-link float-right btn btn-info btn-block">Read More</button>
                </div>
            </div>
            <div class="card col-lg-3 bg-danger">
                <div class="card-header">
                    <img src="{{asset('public/fontEnd/img/img5.jpg')}}" class="card-img-top rounded-circle">

                </div>
                <div class="card-body">
                    <p class="card-text text-justify text-white">learning about their fundamental from scientific
                        databases, their ideas are only
                        to be found in fictional novels. This is due to many people’s incorrect.</p>

                </div>
                <div class="card-footer">
                    <button class="card-link float-right btn btn-info btn-block">Read More</button>
                </div>
            </div>
            <div class="card col-lg-3 bg-secondary">
                <div class="card-header">
                    <img src="{{asset('public/fontEnd/img/img6.jpg')}}" class="card-img-top rounded-circle img-fluid" width="100">

                </div>
                <div class="card-body">
                    <p class="card-text text-justify text-white">learning about their fundamental from scientific
                        databases, their ideas are only
                        to be found in fictional novels. This is due to many people’s incorrect.</p>

                </div>
                <div class="card-footer">
                    <button class="card-link float-right btn btn-info btn-block">Read More</button>
                </div>
            </div>
        </div>
    </div>
</div>
 @endsection
