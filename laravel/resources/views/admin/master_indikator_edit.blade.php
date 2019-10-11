@extends('layout.master_admin')

@section('title','Master Indikator SDGs')
@section('Judul','Master Indikator')
@section('JudulDesc','Ini adalah halaman master indikator dimana admin dapat melihat, menambah, memperbarui, dan menghapus data master.')
@section('content')
  <!-- Form -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Master Indikator</h6>
    </div>
    <div class="card-body">
      <div class="card-body">
        <div class="table-responsive">
          <form method="PUT" class="form-horizontal" action="{{action('sdgsIndiMasterController@update',$id_indikator)}}">
            @csrf
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
              <div class="col-sm-8">
                <input value="{{$master_indikator->indikator}}" name="indikator" type="text" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Tambahkan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<br>
@endsection
