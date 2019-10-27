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
              </form>

                <div class="col-sm-5 md-form amber-textarea active-amber-textarea">
                  <center>
                  <a href="/admin/editpassword" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModalPass">Edit Password</a>
                </center>

                  <div class="modal fade" id="myModalPass" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content Password-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Edit Password</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                          <form class="" action="#" method="post">
                            <div class="form-group">
                              <label class="control-label col-sm-8" for="passbaru">Password Baru:</label>
                              <div class="col-sm-10">
                                <input value="" name="passbaru" type="password" class="form-control" required>
                              </div><br>
                              <label class="control-label col-sm-8" for="passlama">Password Lama:</label>
                              <div class="col-sm-10">
                                <input value="" name="passlama" type="password" class="form-control" required>
                              </div><br>
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                      </div>

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
