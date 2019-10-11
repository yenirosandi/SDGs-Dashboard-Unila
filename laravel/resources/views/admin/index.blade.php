@extends('layout.master_admin')

@section('title','Dashboard Admin')
@section('Judul','SDGs: Universitas Lampung')
@section('JudulDesc','Terdapat 11 SDGs yang harus diperhatikan dalam suatu universitas, diantaranya:')

@section('content')
    @forelse($goals as $goal)
    <a href="{{url('admin/goalDetail', $goal->id_goal)}}">
     <img src="{{$goal->gambar}}" alt="" width="15%">
     </a>
    @empty
            <h3>Nothing</h3>
    @endforelse
    <img src="{{asset('img/sdgs/sds.PNG')}}" alt="SDGs" width="15%">
@endsection
