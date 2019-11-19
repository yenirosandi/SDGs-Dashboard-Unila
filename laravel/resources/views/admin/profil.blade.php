@extends('layout.master_admin')

@section('title','Profil')
@section('Judul','Profil')
@section('JudulDesc','Profil Admin')
@section('content')
@section('title_breadcrumb','Profil')

  <!-- Form -->
  <div class="card shadow mb-4 w-50">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Profil</h6>
    </div>
    <div class="card-body">
      <div class="card-body">
        <div class="table-responsive">

            <div class="form-group">
              <div class="col-sm-10">
                <div class="form-row">
                  <div class="col-sm-5 md-form amber-textarea active-amber-textarea">
                    <i class="fas fa-circle-notch prefix"></i>
                    <label>Nama</label>
                  </div>
                  <div class="col-sm-6 md-form amber-textarea active-amber-textarea">
                    <label>: {{$user->nama}}</label>
                    @if ($errors->has('nama'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('nama') }}</strong>
                    </span>
                    @endif
                  </div>
                </div><br>

                <div class="form-row">
                  <div class="col-sm-5 md-form amber-textarea active-amber-textarea">
                    <i class="fas fa-circle-notch prefix"></i>
                    <label>Username</label>
                  </div>
                  <div class="col-sm-6 md-form amber-textarea active-amber-textarea">
                    <label>: {{$user->username}}</label>
                    @if ($errors->has('Username'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('Username') }}</strong>
                      </span>
                    @endif
                  </div>
                </div><br>

                <div class="form-row">
                  <div class="col-sm-5 md-form amber-textarea active-amber-textarea">
                    <i class="fas fa-circle-notch prefix"></i>
                    <label>NIP</label>
                  </div>
                  <div class="col-sm-6 md-form amber-textarea active-amber-textarea">
                    <label>: {{$user->nip}}</label>
                    @if ($errors->has('nip'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nip') }}</strong>
                        </span>
                    @endif
                  </div>
                </div><br>

                <div class="form-row">
                  <div class="col-sm-5 md-form amber-textarea active-amber-textarea">
                    <i class="fas fa-circle-notch prefix"></i>
                    <label>Jabatan</label>
                  </div>
                  <div class="col-sm-6 md-form amber-textarea active-amber-textarea">
                    <label>: {{$user->jabatan}}</label>
                    @if ($errors->has('jabatan'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('jabatan') }}</strong>
                        </span>
                    @endif
                  </div>
                </div><br>
              </div>
            </div>
            <hr><br>

            <!-- MODAL -->
            <div class="col-sm-10">
              <div class="form-row">

                <div class="col-sm-5 md-form amber-textarea active-amber-textarea">
                  <center>
                  <a href="{{route('profil.edit', $user)}}" class="btn btn-primary pull-right" >Edit Profil</a>
                </center>
               
                </div>
              

                <div class="col-sm-5 md-form amber-textarea active-amber-textarea">
                  <center>
                  <a href="{{route('changePassword')}}"class="btn btn-primary pull-right">Edit Password</a>
                </center>
                    </div>
                  </div>
                </div>
              </div><br>
            </div>

          </div>
        </div>
      </div>
    </div>
@endsection
