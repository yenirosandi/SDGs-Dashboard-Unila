@extends('frontend.master')

@section('title', 'SDGs')

@section('content')



SUSTAINABLE DEVELOPMENT GOALS <hr>
      <!-- ***** Preloader Start ***** -->
      <div id="preloader">
        <div class="mosh-preloader"></div>
    </div>

    <div class="row">
        @foreach  ($goal_detail as $goal)
        <div class="col-md-3 col-xs-12">
            <div class-"thumbnail">
                <img src="/{{$goal->gambar}}" style="width:225px; height:225px;"class="card-img">
            </div>
        </div>
        <div style="width: 0px; height: 225px; border: 1px #000 solid;"></div>
        <div class="col-md-8 col-md-offset-1">
            <h2><?php echo ucwords($goal->nama_goal); ?></h2>
            <p style="text-align:justify; color:black">{{$goal->deskripsi_goal}}</p>
        </div>

        @endforeach
    </div>
    <br><br>
    <h4>Tabel</h4>
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="auto" cellspacing="0">
            <thead>
              <tr>
                <th style="text-align:center; vertical-align:middle;" rowspan="2">No.</th>
                <th style="text-align:center; vertical-align:middle;" rowspan="2">Indikator</th>
                <th style="text-align:center; vertical-align:middle;" rowspan="2">Sumber Data</th>
                <th style="text-align:center; vertical-align:middle;" colspan="2" rowspan="2">Baseline (2017)</th>
                <th style="text-align:center; vertical-align:middle;" colspan="{{$kolomtahun}}">Realisasi Pencapaian</th>
              </tr>
              <tr>
                @for ($thn=2018; $thn <= $tahun_now; $thn++)
                  <th colspan="2" style="text-align:center; vertical-align:middle;" >{{$thn}}</th>
                @endfor
              </tr>
            </thead>
            <tbody>
              @foreach($data as $data_sub)
              <tr>
                <!-- <td style="text-align:center; vertical-align:middle;" colspan="6" disable>Belum ada data</td> -->
                  @if($data_sub->indikator!=$indikator)
                    <th style="background-color:#e8f1ff; " colspan="{{$kolomindi}}">{{$data_sub->indikator}}<a href="{{route('grafikIndi', $data_sub->id_indikator )}}"> <span style="background-color:cadetblue  ;width:30px; height:30px"><img src="{{url('img/profits.png')}}" style="width:30px; height:30px" alt=""></span></a></th>
                  @endif
                <?php $indikator=$data_sub->indikator; ?>
              </tr>
              <tr>
                @if($data_sub->subindikator!=$subindi)
                  <td>{{$no}}</td>
                  <?php $no++; ?>

                  <td>{{$data_sub->subindikator}}</td>
                @else<td style="background-color:#f5f5f5;" colspan="2"></td>
                @endif
                <?php $subindi=$data_sub->subindikator; ?>

                @if($data_sub->fk_id_indikator==$data_sub->id_indikator)
                  <td>{{$data_sub->sumberdata}}</td>
                @endif
                <!-- Buat nilai pencapaian -->


                <style>
                  td:empty{background:grey;} /* style css3 untuk kolom kosong */
                </style>


                @foreach($data_capai as $capai)

                  <?php $tahun=2017; ?>
                  @while($tahun<=$tahun_now)
                    @if($tahun==$capai->tahun && $data_sub->id_m_subindikator==$capai->fk_id_m_subindikator)
                      <td>{{$capai->nilai}}</td>
                      <td>
                        <center>
                          {!!$capai->simbol_trend!!}
                        </center>
                      </td>
                    @else


                    @endif
                    <?php $tahun++ ?>
                  @endwhile
                @endforeach
                @endforeach
              </tr>



            </tbody>
          </table>
        </div>


    </main>

@endsection

