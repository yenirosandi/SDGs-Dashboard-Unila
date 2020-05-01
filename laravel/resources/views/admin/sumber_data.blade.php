@extends('layout.master_admin')

@section('title','Master Sumber Data')
@section('Judul','Master Sumber Data')
@section('JudulDesc','Ini adalah halaman sumber data dimana admin dapat melihat, menambah, memperbarui, dan menghapus data sumber data yang telah terdaftar.')
@section('content')
@section('title_breadcrumb','/ Sumber Data')

  <!-- Form -->
  <div class="card shadow mb-4 w-50">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Sumber Data</h6>
    </div>
    <div class="card-body">
      <div class="card-body">
        <div class="table-responsive">
          <form method="POST" class="form-horizontal" action="{{url('/admin/sumber_data')}}">
            @csrf
            <div class="form-group">
              <label class="control-label col-sm-8" for="sumberdata">Sumber Data:</label>
              <div class="col-sm-6">
                <input name="sumberdata" type="text" class="form-control" id="sumberdata" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
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
      <h6 class="m-0 font-weight-bold text-primary">Tabel Sumber Data</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No.</th>
              <th>Sumber Data</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($sumber as $data_sumber)
            <tr>
              <th>{{$no}}<?php $no++; ?></th>
              <th>{{$data_sumber ->sumberdata }}</th>
              <th>
                <a href="{{route('sumber_data.edit', $data_sumber ->id_m_sumberdata)}}" class="btn btn-warning btn-circle btn-sm">
                  <i class="fas fa-edit"></i>
                </a> Edit
                <a>
                  <form id="data-{{$data_sumber ->id_m_sumberdata}}" action="{{route('sumber_data.destroy',$data_sumber ->id_m_sumberdata)}}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('delete') }}
                  </form>
                  <button class="btn btn-danger btn-circle btn-sm delete-confirm" type="submit" onclick="deleteRow( {{$data_sumber ->id_m_sumberdata}} )">
                      <i class="fas fa-trash"></i>
                    </button> Hapus
                </a>
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
