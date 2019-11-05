 
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link href="{{asset('public/fontEnd/style.css') }}"  rel="stylesheet"/>
        <link href="{{asset('public/fontEnd/css/bootstrap.min.css')}}" rel="stylesheet"/>
        <link href="{{asset('public/fontEnd/css/all.min.css')}}" rel="stylesheet"/>

        <link rel="stylesheet" href="{{asset('public/fontEnd/js/assets/css/docs.theme.min.css')}}">

        <!-- Owl Stylesheets -->
        <link  rel="stylesheet" href="{{asset('public/fontEnd/js/assets/owlcarousel/assets/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/fontEnd/js/assets/owlcarousel/assets/owl.theme.default.min.css')}}">

        <script src="{{asset('public/fontEnd/js/assets/vendors/jquery.min.js')}}"></script>

    </head>
    <body>


        <!-- header-bot -->
        @include('fontEnd.include.header')
        <!-- end-menu -->
        <div class="row mt-2">
            <!-- col-1 -->
            @include('fontEnd.include.sidebar')
            <!-- end col-1 -->
            <!-- col-2 -->
            @yield('homeContain')
            <!-- end col-3 -->
        </div>

        <!-- slider -->

        <!-- end Cupon -->
        @include('fontEnd.include.footer')
        <div class="row ">
            <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog col-lg-8 modal-dialog-centered" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <p class="text-center bg-blue-dark">Please Sign up </p>
                             <h3 class="text-center text-success  ">{{Session::get('message')}}</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times; </button>	
                        </div>
                        <div class="modal-body modal-spa">
                            <form action="{{url('/customer/registration')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <input type="text" name="firstName" class="form-control" placeholder="Enter First Name">
                                    <span class="text-danger font-weight-bold">{{$errors->has('firstName')? $errors->first('firstName'):''}}</span>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="lastName" class="form-control" placeholder="Enter Last Name">
                                    <span class="text-danger font-weight-bold">{{$errors->has('lastName')? $errors->first('lastName'):''}}</span>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Enter Email Address">
                                    <span class="text-danger font-weight-bold">{{$errors->has('email')? $errors->first('email'):''}}</span>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" claspasswords="form-control" placeholder="Enter password">
                                    <span class="text-danger font-weight-bold">{{$errors->has('password')? $errors->first('password'):''}}</span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="btn" class="btn btn-dark btn-block">Submit</button>
                                </div>
                            </form>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
           <div class="row ">
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog col-md-6 modal-dialog-centered" role="document">
                    <div class="modal-content modal-info">
                        <div class="modal-header">
                            <p class="text-center">Please Sign in </p>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times; </button>	
                        </div>
                        <div class="modal-body modal-spa">
                            <form  action="{{url('login/customer')}}" method="post" class="form-horizontal">
                                 {{csrf_field()}}
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Enter Email"/>
                                </div>  
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Enter Password"/>
                                </div>  
                                <div class="form-group">
                                    <button class="btn btn-dark btn-block" type="submit">Login</button>
                                </div> 
                            </form>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           
         
        <script>
            $(document).ready(function () {
                var owl = $('.owl-carousel');
                owl.owlCarousel({
                    items: 3,
                    loop: true,
                    margin: 10,
                    autoplay: true,
                    autoplayTimeout: 2000,
                    autoplayHoverPause: true
                });

            });
        </script>

        <script defer src="{{asset('public/fontEnd/js/assets/owlcarousel/owl.carousel.min.js')}}"></script>
        <script defer src="{{asset('public/fontEnd/js/assets/owlcarousel/owl.carousel.js')}}"></script>
        <script src="{{asset('public/fontEnd/js/jquery-3.4.1.min.js')}}"></script>
        <script src="{{asset('public/fontEnd/js/all.min.js')}}"></script>

        <script src="{{asset('public/fontEnd/js/assets/vendors/highlight.js')}}"></script>
        <script src="{{asset('public/fontEnd/js/assets/js/app.js')}}"></script>

        <script src="{{asset('public/fontEnd/js/bootstrap.min.js')}}"></script>




    </body>
</html>






