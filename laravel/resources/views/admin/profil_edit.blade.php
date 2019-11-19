@extends('layout.master_admin')

@section('title','Edit Profil')
@section('Judul','Edit Profil')
@section('content')
@section('title_breadcrumb','Edit Profil')	


<div class="card shadow mb-4 w-75">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit Profil</h6>
    </div>
    <div class="card-body">
      <div class="card-body">
        <div class="table-responsive">

                          <form class="" action="{{route('profil.update', $user)}}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('put') }}
                            <div class="form-group">
                              <label class="control-label col-sm-8" for="nip">NIP:</label>
                              <div class="col-sm-10">
                                <input value="{{$user->nip}}" name="nip" type="text" class="form-control" required>
                              </div><br>

                              <label class="control-label col-sm-8" for="nama">Nama:</label>
                              <div class="col-sm-10">
                                <input value="{{$user->nama}}" name="nama" type="text" class="form-control" required>
                              </div><br>

                              <label class="control-label col-sm-8" for="username">Username:</label>
                              <div class="col-sm-10">
                                <input value="{{$user->username}}" name="username" type="text" class="form-control" required>
                              </div><br>

                              <label class="control-label col-sm-8" for="jabatan">Jabatan:</label>
                              <div class="col-sm-10">
                                <input value="{{$user->jabatan}}" name="jabatan" type="text" class="form-control" required>
                              </div><br>
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