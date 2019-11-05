
 <div class="header-bot">
    <div class="container">
        <div class="row">
        <div class="col-md-3">
            <h1><img src="{{asset('public/fontEnd/img/logo.png')}}" class="img-fluid" width="100"/></h1>
        </div>
        <div class="col-md-4 mt-5 ml-auto">
            <form>
                <div class="search">
                   <li class="fa fa-search"></li> <input type="search" class="form-control" value="Search"/>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>


    </div>
</div>
</div>
<!-- header-bot -->
<!-- menu -->
<div class="navbar navbar-expand-md navbar-dark bg-secondary">
    <div class="container">

        <div class="navbar-brand">

        </div>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse  " id="nav">
            <ul class="navbar-nav  ">
                <li class="active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">About</a></li>
                <li class="dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services </a>
                    <ul class="dropdown-menu fade bg-secondary border-0">
                        <li><a href="#" class="nav-link">Service One</a></li>
                        <li><a href="#" class="nav-link">Service Two</a></li>
                        <li><a href="#" class="nav-link">Service Three</a></li>
                        <li><a href="#" class="nav-link">Service Four</a></li>
                    </ul>
                </li>
                <li><a href="#" class="nav-link">Contact</a></li>
            </ul>
            <ul class="navbar-nav ml-auto">
                 <li><a href="#" class="nav-link" data-toggle="modal" data-target="#myModal4">Register</a></li>

                <li><a href="{{url('/login')}}" class="nav-link" data-toggle="modal" data-target="#myModal">Login</a></li>

                <li><a href="#" class="nav-link">Logout</a></li>
            </ul>

        </div>
    </div>
</div>

