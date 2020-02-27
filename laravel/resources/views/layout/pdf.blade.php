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
			  font-size: 12px;
        padding: 5px;
		  }
	  </style>
    <img src="{{public_path('img/logo_sdgsunila.png')}}" width="15%">
    <!-- <hr style="color:#ababab;"> -->
    <h4>SUMBER DATA: {{$sumberdata->sumberdata}}</h4>
    Berikut adalah list data metrik SDGs untuk sumber data dari {{$sumberdata->sumberdata}}:
    <br><br>
      <table class="table table-bordered" border="1" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th width="10%"style="text-align:center; vertical-align:middle;">Goal</th>
            <th width="20%" style="text-align:center; vertical-align:middle;">Indikator</th>
            <th width="30%" style="text-align:center; vertical-align:middle;">Sub-Indikator</th>
            <th width="15%" style="text-align:center; vertical-align:middle;">Waktu Pengambilan</th>
            <th width="25%" style="text-align:center; vertical-align:middle;">Nilai</th>
          </tr>
        </thead>
        <tbody>
          @if($countJoin==0)
          <tr>
            <td bgcolor="#f0f0f0"colspan="5" align="center">Tidak ada Data</td>
          </tr>
          @endif
          <?php $goal=null; $indikator=null; ?>
          @foreach($join as $data)
          <tr>
            <?php
            $goal_id=$data->fk_id_goal;
            $count=DB::table('t_m_subindikator')
              ->join('t_goals','fk_id_goal','=','t_goals.id_goal')
              ->join('t_m_sumberdata','fk_id_m_sumberdata','=','t_m_sumberdata.id_m_sumberdata')
              ->select('t_m_subindikator.id_m_subindikator','t_m_subindikator.fk_id_goal','t_goals.id_goal','t_m_sumberdata.id_m_sumberdata')
              ->where('t_m_sumberdata.id_m_sumberdata', $id_m_sumberdata)
              ->where('t_m_subindikator.fk_id_goal', $goal_id)
              ->orderBy('t_m_subindikator.fk_id_goal')
              ->count();
             ?>
            @if($data->fk_id_goal!=$goal)
              <td rowspan="{{$count}}">{{$data->id_goal}}: {{$data->nama_goal}}</td>
            @else
            @endif
            <?php $goal=$data->fk_id_goal;?>
            <?php
            $indikator_id=$data->fk_id_indikator;
            $count2=DB::table('t_m_subindikator')
            ->join('t_m_indikator','fk_id_indikator','=','t_m_indikator.id_indikator')
              ->join('t_m_sumberdata','fk_id_m_sumberdata','=','t_m_sumberdata.id_m_sumberdata')
              ->select('t_m_subindikator.id_m_subindikator','t_m_sumberdata.id_m_sumberdata','t_m_indikator.id_indikator')
              ->where('t_m_sumberdata.id_m_sumberdata', $id_m_sumberdata)
              ->where('t_m_indikator.id_indikator', $indikator_id)
              ->count();
             ?>
            @if($data->fk_id_indikator!=$indikator)
             <td rowspan="{{$count2}}">{{$data->indikator}}</td>
            @else
            @endif
            <?php $indikator=$data->fk_id_indikator; ?>
            <td>({{$no}})<?php $no++; ?>
                {{$data->subindikator}}</td>
            <td>{{$data->waktu_pengambilan}}</td>
            <td></td>
          </tr>
          @endforeach
        </tbody>
      </table>
  </body>
</html>
