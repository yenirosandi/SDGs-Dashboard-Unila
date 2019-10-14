@extends('layout.master_admin')

@section('title','Master Indikator SDGs')
@section('Judul','Master Indikator')
@section('JudulDesc','Ini adalah halaman master indikator dimana admin dapat melihat, menambah, memperbarui, dan menghapus data master.')
@section('content')
  <!-- Form -->
  <div class="card shadow mb-4 w-50">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Master Indikator</h6>
    </div>
    <div class="card-body">
      <div class="card-body">
        <div class="table-responsive">
          <form method="POST" class="form-horizontal" action="{{url('/admin/master_indikator')}}">
            @csrf
            <div class="form-group">
              <label class="control-label col-sm-8" for="goal">Goal ke:</label>
              <div class="col-sm-4">
                <select class="form-control" name="goal">
                  @foreach($goals as $data_goals)
                    <option value="{{$data_goals->id_goal}}">SDG {{$data_goals->id_goal}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-8" for="indikator">Indikator:</label>
              <div class="col-sm-10">
                <input name="indikator" type="text" class="form-control" id="indikator" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Tambahkan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Table -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Indikator</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No.</th>
              <th>Goal</th>
              <th>Indikator</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($master_indikator as $data_master)
            <tr>
              <th>{{$no}}<?php $no++; ?></th>
              <th>SDG {{$data_master->fk_id_goal}}</th>
              <th>{{$data_master->indikator}}</th>
              <th>
                <a href="{{route('master_indikator.edit', $data_master->id_indikator)}}" class="btn btn-warning btn-circle btn-sm">
                  <i class="fas fa-edit"></i>
                </a> Ubah
                <form action="{{route('master_indikator.destroy',$data_master->id_indikator)}}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <button class="btn btn-danger btn-circle btn-sm" type="submit" onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                    <i class="fas fa-trash"></i>
                  </button> Hapus
                </form>
              </th>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
<br>
@endsection
