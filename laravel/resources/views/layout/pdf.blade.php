<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Sumber Data SDGs dari {{$sumberdata->sumberdata}}</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> -->
    <!-- ii<link rel="icon" href="http://zamisli2030.ba/wp-content/uploads/2018/11/sdg-no-bg.png"> -->
  </head>
  <body>
    <style type="text/css">
		  table tr td,
		  table tr th{
			  font-size: 14px;
        padding: 7px;
		  }
	  </style>
    <img src="{{url('img/logo-sdgsunila.png')}}" width="20%">
    <br>
    <h4>SUMBER DATA: {{$sumberdata->sumberdata}}</h4>
    Berikut adalah list data metrik SDGs untuk sumber data dari {{$sumberdata->sumberdata}}:
    <br><br>
      <table class="table table-bordered" border="1" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th style="text-align:center; vertical-align:middle;">Goal</th>
            <th style="text-align:center; vertical-align:middle;">Metrik</th>
            <th style="text-align:center; vertical-align:middle;">Indikator</th>
            <th style="text-align:center; vertical-align:middle;">Waktu Pengambilan</th>
          </tr>
        </thead>
        <tbody>
          @foreach($join as $data)
          <tr>
            @if($data->id_goal!=$goal)
            <td>{{$data->id_goal}}: {{$data->nama_goal}}</td>
            @else<td style="background-color:#0000;"</td>
            @endif
            <?php $goal=$data->id_goal; ?>

            @if($data->indikator!=$indikator)
            <td>{{$data->indikator}}</td>
            @else<td style="background-color:#0000;"</td>
            @endif
            <?php $indikator=$data->indikator; ?>
 
            <td>({{$no}})<?php $no++; ?>
                {{$data->subindikator}}</td>
            <td>{{$data->waktu_pengambilan}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
  </body>
</html>
