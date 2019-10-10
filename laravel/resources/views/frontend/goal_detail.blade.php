@extends('frontend.master')

@section('title', 'SDGs')

@section('content')





<main role="main" style="background-color:#D3D3D3; padding: 40px;">

<div class="container" style=" border-radius: 30px; padding: 50px 80px 80px 80px; background: #FFFFFF;   box-shadow: 5px 10px 18px #888888;">


SUSTAINABLE DEVELOPMENT GOALS <hr>
      <!-- ***** Preloader Start ***** -->
      <div id="preloader">
        <div class="mosh-preloader"></div>
    </div>

    <div class="row">
        @foreach  ($goal_detail as $goal)
        <div class="col-md-6 col-xs-12">
            <div class-"thumbnail">
                <img src="/{{$goal->gambar}}" class="card-img">
                <!-- // slash:) -->
            </div>
        </div>
        <div class="col-md-5 col-md-offset-1">
            <h2><?php echo ucwords($goal->nama_goal); ?></h2>
            <h5>{{$goal->deskripsi_goal}}</h5>
        </div>

        @endforeach
    </div>


    </main>

@endsection

