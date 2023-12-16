<header class="top-area">
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="logo">
                        <a href="/">
                            <img src="images/smarttripheader.png" alt="">
                            
                        </a>
                    </div><!-- /.logo-->
                </div><!-- /.col-->
                <div class="col-sm-10">
                    <div class="main-menu">
                    
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button><!-- / button-->
                        </div><!-- /.navbar-header-->
                        <div class="collapse navbar-collapse">		  
                            <ul class="nav navbar-nav navbar-right">
                                <li class="menu"><a href="/">Home</a></li>
                                <li class="menu"><a href="paket">Paket</a></li>
                                <li class="menu"><a href="calendar">Jadwal </a></li>
                                <li class="menu"><a href="mitra">Mitra</a></li>
                                  @auth
                            <li class="menu dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Hallo, {{Auth::user()->name}} <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                <li><a href="detailbooking">Profile</a></li>
                                <li><a onclick="return document.getElementById('logout').submit();" href="#">Logout</a>
                                <form id="logout" action="{{route('logout') }}" method="post"></li>
                                    @csrf
                                </form>
                            </ul>
                            </li>
                        @else
                            <li class="menu"><a href="{{ route('login') }}">Login</a></li>
                        @endauth
                            </ul>
                            
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.main-menu-->
                </div><!-- /.col-->
            </div><!-- /.row -->
            <div class="home-border"></div><!-- /.home-border-->
        </div><!-- /.container-->
    </div><!-- /.header-area -->

</header><!-- /.top-area-->