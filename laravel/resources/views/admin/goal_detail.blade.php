@section('content')
@extends('layout.master_admin')
@foreach  ($goal_detail as $goal)
  @section('title')
    SDG {!!$goal->id_goal!!}
  @stop
  @section('Judul')
    SDGs {!!$goal->id_goal!!}:{!!$goal->nama_goal!!}
  @stop
    <!-- @section('Judul','SDGs {{$goal->id_goal}}:{{$goal->nama_goal}}') -->
  @section('JudulDesc')
    {!!$goal->deskripsi_goal!!}
  @stop
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Master Indikator {!!$goal->id_goal!!}</h6>
    </div>
    <div class="card-body">
      <div class="card-body">
        <h4>Grafik</h4>
        <hr>
        Grafik <img width="10%" src="/{{$goal->gambar}}">
        <br><br><br>
        <h4>Tabel</h4>
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th style="text-align:center; vertical-align:middle;" rowspan="2">No.</th>
                <th style="text-align:center; vertical-align:middle;" rowspan="2">Indikator</th>
                <th style="text-align:center; vertical-align:middle;" rowspan="2">Sumber Data</th>
                <th style="text-align:center; vertical-align:middle;" rowspan="2">Baseline (2017)</th>
                <th style="text-align:center; vertical-align:middle;" colspan="2">Realisasi Pencapaian</th>
              </tr>
              <tr>
                <th style="text-align:center; vertical-align:middle;" >2017</th>
                <th style="text-align:center; vertical-align:middle;" >2018</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="text-align:center; vertical-align:middle;" colspan="6" disable>Belum ada data</td>
              </tr>
            </tbody>
          </table>
        </div>
        <hr>
      </div>
    </div>
  </div>

  @endforeach
@endsection
