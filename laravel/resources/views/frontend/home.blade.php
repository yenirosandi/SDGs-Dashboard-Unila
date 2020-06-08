@extends('frontend.master')

@section('title', 'Dashboard SDGs Unila')

@section('content')

@section('title_breadcrumb','')
                <nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
			</ol>
		</nav>

    <h6>SUSTAINABLE DEVELOPMENT GOALS</h6>
<hr>


<body>

        <div class="mosh-portfolio">
            @forelse($goals as $goal)
            <div class=" single_gallery_item">
                <div class="hover14 column">
                <figure>
                <a href="{{url('goalDetail', $goal->id_goal)}}"  class=" btn btn-sm btn-outline-light ">
                <img class= "hover14" src="{{$goal->gambar}}" alt="">
                </a>
                </figure>

            </div>
            </div>

            @empty
                    <h3>Nothing</h3>
            @endforelse
            <!-- <img src="{{asset('img/sdgs/sds.png')}}" alt=""> -->

        </div>


</main>

@endsection
