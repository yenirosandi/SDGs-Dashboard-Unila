<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      SUSTAINABLE DEVELOPMENT GOALS <hr>
      </head>
  <body>
    <style type="text/css">
		  table tr td,
		  table tr th{
			  font-size: 14px;
        padding: 7px;
		  }
	  </style>
    <br><br>
    <h4>Tabel</h4>


        <div class="table-responsive">
          <table class="table table-bordered" border="1" id="dataTable" width="100%" cellspacing="0">
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
                    <th style="background-color:#e8f1ff; " colspan="{{$kolomindi}}">{{$data_sub->indikator}}<img src="{{url('img/bars-chart.png')}}" style="width:30px; height:30px" alt=""></span></a></th>
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


    </body>

    </html>