@extends('layout.master_admin')

@section('title','Pencapaian Indikator SDGs')
@section('Judul','Pencapaian Indikator')
@section('JudulDesc','Ini adalah halaman pencapaian indikator dimana admin dapat melihat, menambah, memperbarui, dan menghapus data Pencapaian.')
@section('content')
<!-- Form -->
<div class="card shadow mb-4 w-75">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Form Pencapaian Indikator</h6>
  </div>
  <div class="card-body">
    <div class="card-body">
      <div class="table-responsive">
        <form method="POST" class="form-horizontal" action="{{url('/admin/pencapaian_indikator')}}">
          @csrf
          <div class="form-group">
            <label class="control-label col-sm-8" for="goal">Tahun:</label>
            <div class="col-sm-4">
              <select class="form-control"name="tahun">
                <option value="">Pilih tahun</option>
                  <?php
                   $thn_skr = date('Y');
                   for ($x = $thn_skr; $x >= 2010; $x--) {
                  ?>
                  <option value="{{$x}}"><?php echo $x ?></option>
                <?php } ?>
              </select>
            </div><br>
            <label class="control-label col-sm-8" for="goal">Goal ke:</label>
            <div class="col-sm-4">
              <select class="form-control" name="goal">
                <option value="">Pilih goal</option>
                @foreach($goals as $data_goals)
                  <option value="{{$data_goals->id_goal}}">SDG {{$data_goals->id_goal}}</option>
                @endforeach
              </select>
            </div><br>
            <label class="control-label col-sm-8" for="goal">Indikator master:</label>
            <div class="col-sm-6">
              <select class="form-control" name="indikator">
                <option value="">Pilih indikator</option>
                @foreach($master as $data_indi)
                  <option value="{{$data_indi->id_indikator}}">{{$data_indi->indikator}}</option>
                @endforeach
              </select>
            </div><br>
            <label class="control-label col-sm-8" for="goal">Sub-indikator master:</label>
            <div class="col-sm-6">
              <select class="form-control" name="indikator">
                <option value="">Pilih sub-indikator</option>
                @foreach($sub as $data_sub)
                  <option value="{{$data_sub->id_m_subindikator}}">{{$data_sub->subindikator}}</option>
                @endforeach
              </select>
            </div><br>
            <div class="col-sm-12">
            <div class="form-row">
              <div class="col-sm-6 md-form amber-textarea active-amber-textarea">
                <i class="fas fa-pencil-alt prefix"></i>
                <label for="form22">Nilai</label>
                <textarea id="form22" class="md-textarea form-control" rows="3"></textarea>
              </div>
              <div class="col-sm-6 md-form amber-textarea active-amber-textarea">
                <i class="fas fa-angle-double-right prefix"></i>
                <label for="form22">Nilai Sebelumnya</label>
                <textarea id="form22" class="md-textarea form-control" rows="3" disabled></textarea>
              </div>
            </div>
            </div><br>
            <div class="col-sm-6 md-form amber-textarea active-amber-textarea">
              <i class="fas fa-pencil-alt prefix"></i>
              <label for="form22">Keterangan</label>
              <textarea id="form22" class="md-textarea form-control" rows="2"></textarea>
            </div>
          </div>
          <label class="control-label col-sm-8" for="goal">Trend:</label>
          <div class="col-sm-4">
            <select class="form-control" name="indikator">
              <option value="">Pilih pencapaian</option>
              @foreach($trends as $data_tren)
                <option value="{{$data_tren->id_trend}}">{{$data_tren->keterangan}}</option>
              @endforeach
            </select>
          </div><br>
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
          @foreach($capai as $data_master)
          <tr>
            <th>{{$no}}<?php $no++; ?></th>
            <th>SDG {{$data_master->fk_id_goal}}</th>
            <th>{{$data_master->indikator}}</th>
            <th>
              <a href="{{route('pencapaian_indikator.edit', $data_master->id_indikator)}}" class="btn btn-warning btn-circle btn-sm">
                <i class="fas fa-edit"></i>
              </a> Ubah
              <form action="{{route('pencapaian_indikator.destroy',$data_master->id_indikator)}}" method="post">
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
