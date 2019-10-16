@extends('frontend.master')

@section('title', 'Dashboard SDGs Unila')

@section('content')

@section('title_breadcrumb','Home')	


<main role="main" style="background-color:#D3D3D3; padding: 40px;">

<div class="container" style=" border-radius: 30px; padding: 50px 80px 80px 80px; background: #FFFFFF;   box-shadow: 5px 10px 18px #888888;">


SUSTAINABLE DEVELOPMENT GOALS <hr>
      <!-- ***** Preloader Start ***** -->
      <div id="preloader">
        <div class="mosh-preloader"></div>
    </div>

    <!-- ***** Portfolio Area Start ***** -->
    <section class="mosh-portfolio-area section_padding_100_0 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <p>Our Work</p>
                        <h2>Disini Grafik</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="mosh-portfolio">
            <!-- Single gallery Item Start -->
            @forelse($goals as $goal) 
            <div class="single_gallery_item gd">
            <a href="{{url('goalDetail', $goal->id_goal)}}"  class="btn btn-sm btn-outline-secondary ">
             <img src="{{$goal->gambar}}" alt="">
             </a>     
            <!-- <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                    <a href="{{url('goalDetail', $goal->id_goal)}}"  class="btn btn-sm btn-outline-secondary">
 
                        <h4>"{{$goal->id_goal}}"</h4>
                        <a href="#">Goal 3</a>
                          </a>     
        
                </div>
                </div> -->
            </div> 
            @empty
                    <h3>Nothing</h3>
            @endforelse
           

        </div>
    </section>
    <!-- ***** Portfolio Area End ***** -->

</main>

@endsection