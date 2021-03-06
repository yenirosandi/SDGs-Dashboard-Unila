@extends('layout.master_admin')

@section('title','Edit Password')
@section('Judul','Edit Password')
@section('content')
@section('title_breadcrumb')
/ <a href="{{url()->previous()}}"> Profil </a>
  @stop
@section('title_breadcrumb2')
/ Edit Password
@stop


<div class="card shadow mb-4 w-75">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit Password</h6>
    </div>
    <div class="card-body">
      <div class="card-body">
        <div class="table-responsive">

            <div class="card-body">
            @if (session('error'))
            <div class="alert alert-danger">
            {{ session('error') }}
            </div>
            @endif
            @if (session('success'))
            <div class="alert alert-success">
            {{ session('success') }}
            </div>
            @endif

            <form class="form-horizontal" method="POST" action="{{ route('password.edit') }}">
            {{ csrf_field() }}
            
            <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
            <label for="new-password" class="col-md-4 control-label">Password Saat Ini</label>
            
            <div class="col-md-6">
            <input id="current-password" type="password" class="form-control" name="current-password" required>
            
            @if ($errors->has('current-password'))
            <span class="help-block">
            <strong>{{ $errors->first('current-password') }}</strong>
            </span>
            @endif
            </div>
            </div>
            
            <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
            <label for="new-password" class="col-md-4 control-label">Password Baru</label>
            
            <div class="col-md-6">
            <input id="new-password" type="password" class="form-control" name="new-password" required>
            
            @if ($errors->has('new-password'))
            <span class="help-block">
            <strong>{{ $errors->first('new-password') }}</strong>
            </span>
            @endif
            </div>
            </div>
            
            <div class="form-group">
            <label for="new-password-confirm" class="col-md-4 control-label">Konfirmasi Password Baru</label>
            
            <div class="col-md-6">
            <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
            </div>
            </div>
            
            <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
            Ubah Password
            </button>
            </div>
            </div>
            </form>

        </div>
      </div>
    </div>
  </div>
  </div>
<br>
@endsection