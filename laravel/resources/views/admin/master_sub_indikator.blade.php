@extends('layout.master_admin')

@section('title','Master Sub-Indikator SDGs')
@section('Judul','Master Sub-Indikator')
@section('JudulDesc','Ini adalah halaman master sub-indikator dimana admin dapat melihat, menambah, memperbarui, dan menghapus data master.')
@section('content')
  <!-- Form -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Master Sub Indikator</h6>
    </div>
    <div class="card-body">
      <div class="card-body">
        <div class="table-responsive">
          <form class="form-horizontal" method="POST" action="{{ route('master_sub_indikator.store') }}">
          @csrf

            <div class="form-group">
              <label class="control-label col-sm-2" for="subindikator">Sub Indikator:</label>
              <div class="col-sm-8">
                <input value=""type="text" class="form-control" id="subindikator" name="subindikator" disable>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="waktu_pengambilan">Waktu Pengambilan:</label>
              <div class="col-sm-8">
                    <label class="form-check-inline">
                        <input class="form-check-input" type="checkbox" name="waktu_pengambilan[]" value="Jan" @if(is_array(old('waktu_pengambilan')) && in_array(1, old('waktu_pengambilan'))) checked @endif> Jan
                    </label>
                    <label class="form-check-inline">
                        <input class="form-check-input" type="checkbox" name="waktu_pengambilan[]" value="Feb" @if(is_array(old('waktu_pengambilan')) && in_array(1, old('waktu_pengambilan'))) checked @endif> Feb 
                    </label>
                    <label class="form-check-inline">
                        <input class="form-check-input" type="checkbox" name="waktu_pengambilan[]" value="Mar" @if(is_array(old('waktu_pengambilan')) && in_array(1, old('waktu_pengambilan'))) checked @endif> Mar
                    </label>
                    <label class="form-check-inline">
                        <input class="form-check-input" type="checkbox" name="waktu_pengambilan[]" value="Apr" @if(is_array(old('waktu_pengambilan')) && in_array(1, old('waktu_pengambilan'))) checked @endif> Apr 
                    </label>
                    <label class="form-check-inline">
                        <input class="form-check-input" type="checkbox" name="waktu_pengambilan[]" value="Mei" @if(is_array(old('waktu_pengambilan')) && in_array(1, old('waktu_pengambilan'))) checked @endif> Mei
                    </label>
                    <label class="form-check-inline">
                        <input class="form-check-input" type="checkbox" name="waktu_pengambilan[]" value="Jun" @if(is_array(old('waktu_pengambilan')) && in_array(1, old('waktu_pengambilan'))) checked @endif> Jun 
                    </label>
                    <label class="form-check-inline">
                        <input class="form-check-input" type="checkbox" name="waktu_pengambilan[]" value="Jul" @if(is_array(old('waktu_pengambilan')) && in_array(1, old('waktu_pengambilan'))) checked @endif> Jul
                    </label>
                    <label class="form-check-inline">
                        <input class="form-check-input" type="checkbox" name="waktu_pengambilan[]" value="Ags" @if(is_array(old('waktu_pengambilan')) && in_array(1, old('waktu_pengambilan'))) checked @endif> Ags 
                    </label>
                    <label class="form-check-inline">
                        <input class="form-check-input" type="checkbox" name="waktu_pengambilan[]" value="Sep" @if(is_array(old('waktu_pengambilan')) && in_array(1, old('waktu_pengambilan'))) checked @endif> Sep
                    </label>
                    <label class="form-check-inline">
                        <input class="form-check-input" type="checkbox" name="waktu_pengambilan[]" value="Okt" @if(is_array(old('waktu_pengambilan')) && in_array(1, old('waktu_pengambilan'))) checked @endif> Okt 
                    </label>
                    <label class="form-check-inline">
                        <input class="form-check-input" type="checkbox" name="waktu_pengambilan[]" value="Nov" @if(is_array(old('waktu_pengambilan')) && in_array(1, old('waktu_pengambilan'))) checked @endif> Nov
                    </label>
                    <label class="form-check-inline">
                        <input class="form-check-input" type="checkbox" name="waktu_pengambilan[]" value="Des" @if(is_array(old('waktu_pengambilan')) && in_array(1, old('waktu_pengambilan'))) checked @endif> Des 
                    </label>
              </div>
              <div class="form-group">
              <label class="control-label col-sm-8" for="fk_id_indikator">Indikator:</label>
              <div class="col-sm-4">
                <select class="form-control" name="fk_id_indikator">
                <option value="">-- Pilih Indikator --</option> 
                  @foreach($fk_id_indikator as $fk_id_indikators)
                    <option value="{{$fk_id_indikators->indikator}}">{{$fk_id_indikators->indikator}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
              <label class="control-label col-sm-8" for="fk_indikator">Sumber Data:</label>
              <div class="col-sm-4">
                <select class="form-control" name="fk_sumberdata">
                <option value="">-- Pilih Sumber Data --</option> 
                  @foreach($fk_sumberdata as $fk_sumberdatas)
                    <option value="{{$fk_sumberdatas->sumberdata}}">{{$fk_sumberdatas->sumberdata}}</option>
                  @endforeach
                </select>
              </div>
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
      <h6 class="m-0 font-weight-bold text-primary">Tabel Sub Indikator</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <!-- <th>No.</th>
              <th>Goal</th>
              <th>Indikator</th>
              <th>Aksi</th> -->
            </tr>
          </thead>
          <tbody>
           
          </tbody>
        </table>
      </div>
    </div>
  </div>
<br>
@endsection