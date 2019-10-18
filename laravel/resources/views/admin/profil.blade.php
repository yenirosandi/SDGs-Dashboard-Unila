@extends('layout.master_admin')

@section('title','Profil')
@section('Judul','Profil')
@section('JudulDesc','Profil Admin')
@section('content')
  <!-- Form -->
  <div class="card shadow mb-4 w-50">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Profil</h6>
    </div>
    <div class="card-body">
      <div class="card-body">
        <div class="table-responsive">


            <div class="form-group row">
                <label for="nama" class="col-md-4 col-form-label text-md-right">Nama</label>
                <div class="col-md-6">
                    <input id="nama" type="text" class="form-control" name="name" value="{{Auth::user()->nama}}" required readonly>
                    @if ($errors->has('nama'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nama') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            
            <div class="form-group row">
                <label for="nama" class="col-md-4 col-form-label text-md-right">Username</label>
                <div class="col-md-6">
                    <input id="Username" type="text" class="form-control" name="Username" value="{{Auth::user()->username}}" required readonly>
                    @if ($errors->has('Username'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('Username') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="nip" class="col-md-4 col-form-label text-md-right">NIP</label>
                <div class="col-md-6">
                    <input id="nip" type="text" class="form-control" name="nip" value="{{Auth::user()->nip}}" required readonly>
                    @if ($errors->has('nip'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nip') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="nip" class="col-md-4 col-form-label text-md-right">Jabatan</label>
                <div class="col-md-6">
                    <input id="jabatan" type="text" class="form-control" name="jabatan" value="{{Auth::user()->jabatan}}" required readonly>
                    @if ($errors->has('jabatan'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('jabatan') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <br>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
               <a href="/admin/editprofil" class="btn btn-primary">Edit Profil</button></a>

               <a href="/admin/editpassword" class="btn btn-primary pull-right">Edit Password</a>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>


<br>
@endsection
