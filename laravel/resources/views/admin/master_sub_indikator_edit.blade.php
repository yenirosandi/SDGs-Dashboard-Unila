@extends('layout.master_admin')

@section('title','Edit Master Sub-Indikator SDGs')
@section('Judul','Edit Master Sub-Indikator')
@section('JudulDesc','Ini adalah halaman edit master sub-indikator dimana terdapat form untuk memperbarui data master sub-indikator.')
@section('content')
   <!-- Form -->
   <div class="card shadow mb-4 w-75">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Master Sub Indikator</h6>
    </div>
    <div class="card-body">
      <div class="card-body">
        <div class="table-responsive">
          <form method="post" class="form-horizontal" action="{{route('master_sub_indikator.update',$edit_subindikators->id_m_subindikator)}}">
            {{ csrf_field() }}
            {{ method_field('put') }}
            <div class="form-group">
              <label class="control-label col-sm-8" for="fk_id_indikator">Indikator: </label>
              <div class="col-sm-10">
                  <select name="fk_id_indikator" class="form-control">
                  @foreach($fk_id_indikators as $key=>$value)
                      <?php
                      if($key!=0){
                          $sub_fk_id_indikators=DB::table('t_m_indikator')->select('id_indikator','indikator')->where('id_indikator',$key)->get();
                          if(count($sub_fk_id_indikators)>0){
                              foreach ($sub_fk_id_indikators as $sub_fk_id_indikator){?>
                                  <option value="{{$sub_fk_id_indikator->id_indikator}}"{{$edit_fk_indikators->id_indikator==$sub_fk_id_indikator->id_indikator?' selected':''}}> {{$sub_fk_id_indikator->indikator}}</option>
                          <?php }
                          }
                      }
                      ?>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-10" for="subindikator">Sub Indikator:</label>
              <div class="col-sm-10">
                <input value="{{$edit_subindikators->subindikator}}" name="subindikator" type="text" class="form-control" required>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-8" for="fk_id_m_sumberdata">Sumber Data: </label>
              <div class="col-sm-4">
                  <select name="fk_id_m_sumberdata" class="form-control">
                  @foreach($fk_sumberdatas as $key=>$value)
                      <?php
                      if($key!=0){
                          $sub_fk_sumberdatas=DB::table('t_m_sumberdata')->select('id_m_sumberdata','sumberdata')->where('id_m_sumberdata',$key)->get();
                          if(count($sub_fk_sumberdatas)>0){
                              foreach ($sub_fk_sumberdatas as $sub_fk_sumberdata){?>
                                  <option value="{{$sub_fk_sumberdata->id_m_sumberdata}}"{{$edit_fk_sumberdatas->id_m_sumberdata==$sub_fk_sumberdata->id_m_sumberdata?' selected':''}}> {{$sub_fk_sumberdata->sumberdata}}</option>
                          <?php }
                          }
                      }
                      ?>
                  @endforeach
                </select>
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
