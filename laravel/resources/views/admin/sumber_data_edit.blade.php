@extends('layout.master_admin')

@section('title','Edit Sumber Data')
@section('Judul','Edit Sumber Data')
@section('JudulDesc','Ini adalah halaman edit sumber data dimana terdapat form untuk memperbarui data sumber data yang telah didaftarkan.')
@section('content')
@section('title_breadcrumb','Edit')

  <!-- Form -->
  <div class="card shadow mb-4 w-50">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Edit Sumber Data</h6>
    </div>
    <div class="card-body">
      <div class="card-body">
        <div class="table-responsive">
          <form method="POST" class="form-horizontal" action="{{route('sumber_data.update',$sumber->id_m_sumberdata)}}">
            {{ csrf_field() }}
            {{ method_field('put') }}
            <div class="form-group">
              <label class="control-label col-sm-8" for="sumberdata">Sumber Data:</label>
              <div class="col-sm-6">
                <input value="{{$sumber->sumberdata}}" name="sumberdata" type="text" class="form-control" id="sumberdata" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Ubah</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<br>
@endsection
