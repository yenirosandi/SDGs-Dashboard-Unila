
<header class="header_area1" id="myHeader">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <div class="menu_area h-100">
                        <nav class="navbar h-100 navbar-expand-lg align-items-center">
                            <div class="container">
                                <a class="navbar-brand" href="#"><img src="{{url('frontend/gambar/sdgs.png')}}" class= "logo-header" alt=""></a>
                                <h3><a class="sdgs-header" href="{{url('home')}}" style=" ">SDGs DASHBOARD <br>LAMPUNG UNIVERSITY</a></h3>

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon"></span>
                                </button>


                                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                                  <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                                      <ul class="navbar-nav ml-auto">
                                          <li class="nav-item">
                                            <a class="nav-link" href="{{route('home')}}" style="font-family:roboto; float:right;"><img src="{{url('frontend/gambar/GOALS.png')}}" alt="goal SDGss"  class= "logo-header"></a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="{{route('home')}}" style="font-family:roboto; float:right;"><img src="{{url('frontend/gambar/UNILA.png')}}" alt="logo unila"  class= "logo-header"></a>
                                          </li>

                                      </ul>
                                  </div>
                                </li>

                                </div>

                                                <ul class="main_nav">

                                                    <li class="nav-link dropdown">

                                                          <!-- ini untuk pengkondisian klau sudah login dia akan seperti di bawah ini menunya -->
                                                          <?php
                                                    if (Auth::check())  { ?>
                                                        <a class="nav-link dropdown-toggle  login-header fa fa-user-circle fa-3x" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                                                            <a style="background-color:#3ed7ed;" class="dropdown-item">{{Auth::user()->nama}}</a>
                                                            <a class="dropdown-item" href="{{url('/admin')}}">Kelola Dashboard</a>
                                                            <a class="dropdown-item" href="{{url('/logout')}}">Logout</a>
                                                        </div>
                                                      </li>
                                                    </ul>

                                                        <?php }
                                                            else {?>
                                                                <div class="login_button">
                                                                  <a class= "login-header" href="{{url('/login')}}">Login</a></li>  </div>

                                                            <?php  } ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <img class="list_sdg" src="{{url('frontend/gambar/list.png')}}" alt="SDGs">

</header>
