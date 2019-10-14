@extends('layout.master_admin')

@section('title','Edit Master Indikator SDGs')
@section('Judul','Edit Master Indikator')
@section('JudulDesc','Ini adalah halaman edit master indikator dimana terdapat form untuk memperbarui data master.')
@section('content')
  <!-- Form -->
  <div class="card shadow mb-4 w-50">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Master Indikator</h6>
    </div>
    <div class="card-body">
      <div class="card-body">
        <div class="table-responsive">
          <form method="post" class="form-horizontal" action="{{route('master_indikator.update',$master_indikator->id_indikator)}}">
          {{ csrf_field() }}
          {{ method_field('put') }}
            <div class="form-group">
              <label class="control-label col-sm-8" for="goal">Goal ke:</label>
              <div class="col-sm-4">
                <select class="form-control" name="goal">
                  @foreach($goals as $data_goals)
                    <option value="{{$data_goals->id_goal}}">SDG {{$data_goals->id_goal}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-8" for="indikator">Indikator:</label>
              <div class="col-sm-10">
                <input value="{{$master_indikator->indikator}}" name="indikator" type="text" class="form-control" required>
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
