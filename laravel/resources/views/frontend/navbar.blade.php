<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #FFF5EE ; align:center;">
  
<div class="container">
  <a class="navbar-brand" href="#"><img src="{{url('frontend/gambar/sdgs.png')}}" alt="" style="weight:90px; height:90px;"></a>
  <h3><a class="nav-link" href="{{url('home')}}" style="font-family:roboto; ">SDGs DASHBOARD <br>LAMPUNG UNIVERSITY</a></h3>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{route('home')}}" style="font-family:roboto; float:right;"><img src="{{url('frontend/gambar/GOALS.png')}}" alt="" style="weight:90px; height:90px;"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('home')}}" style="font-family:roboto; float:right;"><img src="{{url('frontend/gambar/UNILA.png')}}" alt="" style="weight:90px; height:90px;"></a>
            </li>
    
        </ul>
    </div>
   
  </div>

                  <ul class="main_nav">
              
                      <li class="nav-link dropdown">  
                      <!-- <a href="#">Register or Login</a></div> -->
                                     <!-- ini untuk pengkondisian klau sudah login dia akan seperti di bawah ini menunya -->
                                     <?php
                              if (Auth::check())  { ?>
                                  <a class="nav-link dropdown-toggle fa fa-user-circle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                  <div class="dropdown-menu" aria-labelledby="dropdown01">
                                      <a class="dropdown-item" href="">{{Auth::user()->name}}</a>
                                      <a class="dropdown-item" href="{{url('/admin')}}">Kelola Dashboard</a>
                                      <a class="dropdown-item" href="{{url('/logout')}}">Logout</a>
                                  </div>
                                </li>


                          <?php }
                              else {?>
                                  <div class="login_button">
                                    <a href="{{url('/login')}}">Login</a></li>  </div>
                              <?php  } ?>
                                      

</nav>
<img src="{{url('frontend/gambar/list.png')}}" alt="">