@extends('layout.master_admin')

@section('title','Pencapaian Indikator SDGs')
@section('Judul','Pencapaian Indikator')
@section('JudulDesc','Ini adalah halaman pencapaian indikator dimana admin dapat melihat, menambah, memperbarui, dan menghapus data Pencapaian.')
@section('content')
@section('title_breadcrumb','/ Pencapaian')



<!-- Form -->
<div class="card shadow mb-4 w-75">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Form Pencapaian Indikator</h6>
  </div>
  <div class="card-body">
    <div class="card-body">
      <div class="table-responsive">

      <!-- {{-- menampilkan error validasi --}} -->
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif


              <form method="POST" class="form-horizontal" action="{{route('pencapaian_indikator.store')}}">
                @csrf
                <div class="form-group">
                      <label class="control-label col-sm-8" for="tahun">Tahun:</label>
                      <div class="col-sm-4">
                            <select id="tahun" class="form-control"name="tahun">
                              <option value="">Pilih tahun</option>
                                <?php
                                for ($tahun = $thn_skr; $tahun >= 2017; $tahun--) {
                                ?>
                                <option type="number"value="{{$tahun}}"><?php echo $tahun ?></option>
                              <?php } ?>
                            </select>
                      </div><br>
                      <label class="control-label col-sm-10" for="goal">Goal ke:</label>
                      <div class="col-sm-10">
                            <select id="slgoal" class="form-control" name="goal" data-urlreq="{{ route('get.list.capaian.indikator') }}">
                              <!-- <option value="">Pilih goal</option> -->
                              <option value="" >Pilih Goal</option>
                              @foreach($goals as $data_goals)
                                <option value="{{$data_goals->id_goal}}">SDG {{$data_goals->id_goal}} - {{$data_goals->nama_goal}}</option>
                              @endforeach
                            </select>
                      </div><br>
                      <label class="control-label col-sm-8" for="indikator">Indikator master:</label>
                      <div class="col-sm-10">
                            <select id="slindi" class="form-control" name="indikator" data-urlreq="{{ route('get.list.capaian.subindi') }}">
                            <option value="">Pilih Indikator</option>
                            </select>
                      </div><br>
                      <label class="control-label col-sm-8" for="sub">Sub-indikator master:</label>
                      <div class="col-sm-10">
                            <select id="slsub" class="form-control" name="sub">
                              <option value="">Pilih Sub Indikator</option>
                            </select>
                      </div><br>
                      <div class="col-sm-12">
                          <div class="form-row">
                            <div class="col-sm-6 md-form amber-textarea active-amber-textarea">
                              <i class="fas fa-pencil-alt prefix"></i>
                              <label for="nilai">Nilai</label>
                              <textarea name="nilai" id="nilai" class="md-textarea form-control" rows="3" >{{ old('nilai') }}</textarea>
                            </div>
                            <div class="col-sm-6 md-form amber-textarea active-amber-textarea">
                              <i class="fas fa-angle-double-right prefix"></i>
                              <label for="nilai_sebelumnya">Nilai Sebelumnya</label>
                              <h2 id="nilai_sebelumnya">0</h2>
                            </div>
                          </div>
                      </div><br>
                      <div class="col-sm-6 md-form amber-textarea active-amber-textarea">
                            <i class="fas fa-pencil-alt prefix"></i>
                            <label for="keterangan">Keterangan</label>
                            <textarea name="keterangan" id="keterangan" class="md-textarea form-control" rows="2" >{{ old('keterangan') }}</textarea>
                      </div>
                      <label class="control-label col-sm-8" for="trend">Trend:</label>
                      <div class="col-sm-4">
                        <select class="form-control" name="trend">
                          <option value="">Pilih pencapaian</option>
                          @foreach($trends as $data_tren)
                            <option value="{{$data_tren->id_trend}}">{{$data_tren->keterangan}}</option>
                          @endforeach
                        </select>
                      </div><br>
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
            <th>Tahun</th>
            <th>Goal</th>
            <th>Indikator</th>
            <th>Sub Indikator</th>
            <th>Sumber Data</th>
            <th>Nilai</th>
            <th>Keterangan</th>
            <!-- <th>Berkas</th> -->
            <th>Trend</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($capai as $data)
          <tr>
            <td>{{$no}}<?php $no++; ?></td>
            <td>{{$data->tahun}}</td>
            <td>SDG {{$data->id_goal}}</td>
            <td>{{$data->indikator}}</td>
            <td>{{$data->subindikator}}</td>
            @foreach($sub as $data_sub)
              @if($data->id_m_subindikator==$data_sub->id_m_subindikator)
               <th>{{$data_sub->sumberdata}}</th>
              @endif
            @endforeach
            <th>{{$data->nilai}}</th>
            <th>{{$data->keterangan}}</th>
            <!-- <th>{{$data->berkas}}</th> -->
            <th>{{$data->keterangan_trend}}</th>
            <th>
              <a href="{{route('pencapaian_indikator.edit', $data->id_pencapaian)}}" class="btn btn-warning btn-circle btn-sm">
                <i class="fas fa-edit"></i>
              </a> Ubah
              <form id="data-{{$data->id_pencapaian}}" action="{{route('pencapaian_indikator.destroy',$data->id_pencapaian)}}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                </form>
                <button class="btn btn-danger btn-circle btn-sm delete-confirm" type="submit" onclick="deleteRow( {{$data->id_pencapaian}} )">
                    <i class="fas fa-trash"></i>
                  </button> Hapus
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
