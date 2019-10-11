@extends('layout.master_admin')

@section('title','Pencapaian Indikator SDGs')
@section('Judul','Pencapaian Indikator SDGs')
@section('JudulDesc','Ini adalah halaman pencapaian indikator dimana admin dapat melihat, menambah, memperbarui, dan menghapus data master.')
@section('content')
  <!-- Form -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Pencapaian Indikator</h6>
    </div>
    <div class="card-body">
      <div class="card-body">
        <div class="table-responsive">
          <form class="form-horizontal" action="/action_page.php">
            <div class="form-group">
              <label class="control-label" for="goal">Goal ke:</label>
              <div class="col-sm-8">
                <select class="form-control" name="goal">
                  @foreach($goals as $data_goals)
                    <option value="{{$data_goals->nama_goal}}">SGD {{$data_goals->id_goal}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="indikator">Indikator:</label>
              <div class="col-sm-8">
                <input value="8"type="text" class="form-control" id="indikator" name="indikator" disable>
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
      <h6 class="m-0 font-weight-bold text-primary">Tabel Pencapaian Indikator</h6>
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
              <?php $no=1; ?>
              <th>{{$no}}<?php $no++; ?></th>
              <th>{{$data_master->fk_id_goal}}</th>
              <th>{{$data_master->indikator}}</th>
              <th>
                <a href="/master_indikator/edit/{{$data_master->id_indikator}}" class="btn btn-warning btn-circle btn-sm">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="/master_indikator/hapus/{{$data_master->id_indikator}}" class="btn btn-danger btn-circle btn-sm">
                  <i class="fas fa-trash"></i>
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
