@extends('layout.master_admin')

@section('title','Dashboard Admin')
@section('Judul','SDGs: Universitas Lampung')
@section('JudulDesc','Terdapat 11 SDGs yang harus diperhatikan dalam suatu universitas, diantaranya:')

@section('content')
    @forelse($goals as $goal)
    <a href="{{url('goalDetail', $goal->id_goal)}}">
     <img src="{{$goal->gambar}}" alt="" width="20%">
     </a>
    @empty
            <h3>Nothing</h3>
    @endforelse
@endsection
