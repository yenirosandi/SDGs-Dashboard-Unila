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
                <th style="text-align:center; vertical-align:middle;" colspan="2">Realisasi Pencapaian</th>
              </tr>
              <tr>
                <th style="text-align:center; vertical-align:middle;" >2018</th>
                <th style="text-align:center; vertical-align:middle;" >2019</th>
              </tr>
            </thead>
            <tbody>
            @foreach($indikator as $indi)
              <tr>
                <!-- <td style="text-align:center; vertical-align:middle;" colspan="6" disable>Belum ada data</td> -->
                <td colspan="6">{{$indi->indikator}}</td>
              </tr>
              @foreach($sub as $subIndi)
              <tr>
                <td>{{$no}}</td>
                <td>
                    @if($indi->id_indikator==$subIndi->fk_id_indikator)
                      {{$subIndi->subindikator}}
                    @else {{$null}}
                    @endif
                </td>
                <td>{{$subIndi->sumberdata}}</td>
                <?php
                $tahun=2017;
                $data=DB::table('t_pencapaian')
                  ->join('t_goals','fk_id_goal','=','t_goals.id_goal')
                  ->join('t_m_indikator','fk_id_indikator','=','t_m_indikator.id_indikator')
                  ->join('t_m_subindikator','fk_id_m_subindikator','=','t_m_subindikator.id_m_subindikator')
                  ->join('t_trends','fk_id_trend','=','t_trends.id_trend')
                  ->select('t_pencapaian.*','t_goals.*','t_m_indikator.*','t_m_subindikator.*','t_trends.keterangan as keterangan_trend')
                  ->where('id_goal', '=', $id)
                  ->where('tahun','=', $tahun)
                  ->get();
                $tahun=2017;
                foreach ($data as $data_capaian){?>
                <td>
                  @if($indi->id_indikator==$subIndi->fk_id_indikator)
                    {{$data_capaian->nilai}}
                  @else {{$null}}
                  @endif
                </td>
                <?php $tahun++; ?>
                <td>
                  @if($indi->id_indikator==$subIndi->fk_id_indikator)
                    {{$data_capaian->nilai}}
                  @else {{$null}}
                  @endif
                </td>
                <?php $tahun++; ?>
                @if($indi->id_indikator==$subIndi->fk_id_indikator)
                  {{$data_capaian->nilai}}
                @else {{$null}}
                @endif
              </tr>
            <?php } ?>
              <?php $no++; ?>
              @endforeach
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
