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

  </head>
  <body>
    <img src="{{public_path('img/logo_sdgsunila.png')}}" width="15%">
    <br>
    <h4>LAPORAN PENCAPAIAN SUSTAINABLE DEVELOPMENT GOAL {{$id}}</h4>
    <hr style="border:1px solid black;">
    <table border ="0" cellpadding="2";>
      <tr>
        <?php  ?>
        <td><img src="{{$goalTbl->gambar}}" style="width:20%;"></td>
        <td>
          <h3>{{$goalTbl->nama_goal}}</h3>
          <p style="text-align:justify; color:black; font-size: 16px">{{$goalTbl->deskripsi_goal}} </p>
        </td>
      </tr>
    </table>
    <br><br>

    <table class="table table-bordered" border="1" width="100%" cellspacing="0">
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
        <!-- Kalo ga ada isi -->
        @if($countCapai==0)
        <tr>
          <td bgcolor="#f0f0f0"colspan="5" align="center">Tidak ada Data</td>
        </tr>
        @endif
        <?php $indikator=null; $subindi=null; ?>
        @foreach($data as $data_sub)
        <tr>
          <!-- <td style="text-align:center; vertical-align:middle;" colspan="6" disable>Belum ada data</td> -->

            @if($data_sub->indikator!=$indikator)
              <td style="background-color:#e8f1ff;" colspan="{{$kolomindi}}">{{$data_sub->indikator}}</td>
            @else <td style="padding: 0px; border:0px;" colspan="{{$kolomindi}}"></td>
            @endif
          <?php $indikator=$data_sub->indikator; ?>
        </tr>
        <tr>
          @if($data_sub->subindikator!=$subindi)
            <td style='text-align:center;border-bottom:none;border-right:none;'>{{$no}}.</td>
            <?php $no++; ?>
            <td style="border-bottom:none;">{{$data_sub->subindikator}}</td>
          @else
          <td style='text-align:center;border-top:none; border-bottom:none;'></td>
          <td style="border-top:none; border-bottom:none;"></td>
          @endif
          <?php $subindi=$data_sub->subindikator; ?>

          @if($data_sub->fk_id_indikator==$data_sub->id_indikator)
            <td style="border-bottom:none;">{{$data_sub->sumberdata}}</td>
          @endif

          <!-- Buat nilai pencapaian -->
          @foreach($data_capai as $capai)
            <?php
            $tahun=2017;
            // DD($trend);
            ?>
            @while($tahun<=$tahun_now)
              @if($tahun==$capai->tahun && $data_sub->id_m_subindikator==$capai->fk_id_m_subindikator)
                <td style="text-align:center; border-right:none; border-bottom:none;">{{$capai->nilai}}</td>
                <?php
                $trend= $capai->keterangan_trend;
                // DD($trend);
                //ubah data simbol trend
                if ($trend=='Data Naik') {
                  $ikonTrend='trend_up.png';
                }elseif ($trend=='Data Konstan') {
                  $ikonTrend=='trend_right.png';
                }elseif ($trend=='Data Turun') {
                  $ikonTrend='trend_down.png';
                }elseif ($trend=='Tidak Ada Data') {
                  $ikonTrend='trend not yet.png';
                }else
                $ikonTrend='trend not yet.png';
                 ?>
                <td style="border-bottom:none; border-left:none;">
                  <center>
                    <!-- {!!$capai->simbol_trend!!} -->
                    <img src="{{public_path('img/'.$ikonTrend)}}" width="80%">
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





  </body>
</html>
