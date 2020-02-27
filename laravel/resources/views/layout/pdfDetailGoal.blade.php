<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cetak Detail Goal {{$id}}</title>
  </head>
  <body>
    <style type="text/css">
      table tr td,
      table tr th{
        font-size: 14px;
        padding: 7px;
      }
    </style>
    <img src="{{public_path('img/logo_sdgsunila.png')}}" width="25%">
    <br>
    <h4>SDG GOAL {{$id}}</h4>
    <h5>{{$goalTbl->nama}}</h5>

  </body>
</html>
