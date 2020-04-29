@extends('layout.master_admin')

@section('title','Form Pengajuan')
@section('Judul','Form Pengajuan')
@section('JudulDesc','Berikut adalah halaman untuk mengunduh berkas pengajuan data berdasarkan sumber data yang diinginkan')

@section('content')
@section('title_breadcrumb','/ Unduh Form')

<div class="card shadow mb-4 w-75">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">List Pengajuan Form</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No.</th>
            <th>Sumber Data</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($sumberdata as $data_sumber)
          <tr>
            <td>{{$no}}<?php $no++; ?></td>
            <td>{{$data_sumber->sumberdata}}</td>
            <td>
              <a href="{{action('formPengajuanController@downloadPDF', $data_sumber->id_m_sumberdata)}}" class="btn btn-info btn-circle btn-sm">
                <i class="fas fa-file-download"></i>
              </a> Unduh
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<br>
@endsection
