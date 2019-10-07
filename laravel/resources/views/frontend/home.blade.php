@extends('frontend.master')

@section('title', 'Dashboard SDGs Unila')

@section('content')


<main role="main" style="background-color:#D3D3D3; padding: 50px;">

<div class="container" style=" border-radius: 60px; padding: 100px; background: #FFFFFF">
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
            <div class="single_gallery_item gd">
                <img src="{{url('frontend/mosh/img/portfolio-img/1.jpg')}}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item bi">
                <img src="{{url('frontend/mosh/img/portfolio-img/2.jpg')}}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item gd bi">
                <img src="{{url('frontend/mosh/img/portfolio-img/3.jpg')}}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item pho">
                <img src="{{url('frontend/mosh/img/portfolio-img/4.jpg')}}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item pho">
                <img src="{{url('frontend/mosh/img/portfolio-img/5.jpg')}}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item wd pc">
                <img src="{{url('frontend/mosh/img/portfolio-img/6.jpg')}}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item wd">
                <img src="{{url('frontend/mosh/img/portfolio-img/7.jpg')}}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item pc">
                <img src="{{url('frontend/mosh/img/portfolio-img/8.jpg')}}" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Portfolio Area End ***** -->

    <div class="album py-5 bg-light">
  <div class="container">
    <div class="row">

    
      </div>


    </div>
  </div>
</div>

</main>

@endsection