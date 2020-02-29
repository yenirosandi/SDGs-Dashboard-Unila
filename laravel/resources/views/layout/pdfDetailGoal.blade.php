<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cetak Detail Goal {{$id}}</title>

    <style type="text/css">
      table tr td,
      table tr th{
        font-size: 14px;
        padding: 7px;
      }
    </style>
    <img src="{{public_path('img/logo_sdgsunila.png')}}" width="15%">
    <br>
    <h4>SDG GOAL {{$id}}</h4>

  </head>

<body>

      <table border ="0" cellpadding="2";>
          <tr>
              <td>  
                <img src="{{$goalTbl->gambar}}" style="width:30%;"> 
              </td>       
              <td> 
                <h4>{{$goalTbl->nama_goal}}</h4>
                <p style="text-align:justify; color:black">{{$goalTbl->deskripsi_goal}} </p> 
              </td>
          </tr>
      </table>

      <br><br>

      <table class="table table-bordered" border ="1" id="dataTable" width="100%"   cellpadding="10"  cellspacing="0">
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
                    <th style="background-color:#e8f1ff; " colspan="{{$kolomindi}}">{{$data_sub->indikator}}</th>
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
                    @endif
                    <?php $tahun++ ?>

                  @endwhile
                @endforeach
                @endforeach
              </tr>

        </tbody>
      </table>
      

  


  </body>
</html>
