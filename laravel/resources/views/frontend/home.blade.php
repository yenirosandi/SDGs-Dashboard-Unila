@extends('frontend.master')

@section('title', 'Dashboard SDGs Unila')

@section('content')

@section('title_breadcrumb','Home')	


SUSTAINABLE DEVELOPMENT GOALS <hr>


    <!-- ***** Portfolio Area Start ***** -->
    <section class="mosh-portfolio-area section_padding_100_0 clearfix">

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