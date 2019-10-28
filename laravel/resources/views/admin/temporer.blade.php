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
      <h6 class="m-0 font-weight-bold text-primary">Form Master Indikator SDG {!!$goal->id_goal!!}</h6>
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
                <th style="text-align:center; vertical-align:middle;" colspan="{{$kolomtahun}}">Realisasi Pencapaian</th>
              </tr>
              <tr>
                @for ($thn=2018; $thn <= $tahun_now; $thn++)
                  <th style="text-align:center; vertical-align:middle;" >{{$thn}}</th>
                @endfor
              </tr>
            </thead>
            <tbody>
              @foreach($data as $data_sub)
              <tr>
                <!-- <td style="text-align:center; vertical-align:middle;" colspan="6" disable>Belum ada data</td> -->
                  @if($data_sub->indikator!=$indikator)
                    <th style="background-color:#e8f1ff; " colspan="{{$kolomindi}}">{{$data_sub->indikator}}</th>
                  @endif
                <?php $indikator=$data_sub->indikator; ?>
              </tr>
              <tr>
                <td>{{$no}}</td>
                <td>
                  {{$data_sub->subindikator}}
                  <?php $subid=$data_sub->id_m_subindikator; ?>
                </td>
                @if($data_sub->fk_id_indikator==$data_sub->id_indikator)
                  <td>{{$data_sub->sumberdata}}</td>
                @endif
                <!-- Buat nilai pencapaian -->
                @foreach($data_capai as $capai)
                  @for ($thn_capai=2017; $thn_capai <= $tahun_now; $thn_capai++)
                    @if ($thn_capai==$capai->tahun && $subid==$capai->fk_id_m_subindikator)
                      <td> {{$capai->nilai}} </td>
                    @elseif ($thn_capai==$capai->tahun && $subid!=$capai->fk_id_m_subindikator)
                      <td> {{$null}} </td>
                    @endif
                  @endfor
                @endforeach
              </tr>
              <?php $no++; ?>
            @endforeach
            </tbody>
          </table>
        </div>
        <hr>
      </div>
    </div>
  </div>

  @endforeach
@endsection