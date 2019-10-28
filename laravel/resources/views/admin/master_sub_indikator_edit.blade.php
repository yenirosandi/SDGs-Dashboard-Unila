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
            <label class="control-label col-sm-8" for="goal">Goal ke:</label>
            <div class="col-sm-4">
              <select id="slgoal" class="form-control" name="goal" data-urlreq="{{ route('get.list.capaian.indikator') }}">
                @foreach($fk_id_goals as $key=>$value)
                    <?php
                    if($key!=0){
                        $pencapaian_fk_goal=DB::table('t_goals')->select('id_goal','id_goal')->where('id_goal',$key)->get();
                        if(count($pencapaian_fk_goal)>0){
                            foreach ($pencapaian_fk_goal as $capai_indi){?>
                              <option value="{{$capai_indi->id_goal}}"{{$edit_fk_id_goals->id_goal==$capai_indi->id_goal?' selected':''}}>SDG {{$capai_indi->id_goal}}</option>
                        <?php }
                      }
                    }
                    ?>
                @endforeach
              </select>
            </div><br>
            
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
              <label class="control-label col-sm-8" for="waktu_pengambilan">Waktu Pengambilan:</label>
              <div class="col-sm-6">
                <label class="form-check-inline">
                  <input type="checkbox" name="waktu_pengambilan[]" value="jan" {{in_array("jan", $waktu_pengambilan)? "checked":""  }}>Jan
                </label>
                <label class="form-check-inline">
                  <input type="checkbox" name="waktu_pengambilan[]" value="feb" {{in_array("feb", $waktu_pengambilan)? "checked":""  }}>Feb
                </label>
                <label class="form-check-inline">
                  <input type="checkbox" name="waktu_pengambilan[]" value="mar" {{in_array("mar", $waktu_pengambilan)? "checked":""  }}>Mar
                </label>
                <label class="form-check-inline">
                  <input type="checkbox" name="waktu_pengambilan[]" value="apr" {{in_array("apr", $waktu_pengambilan)? "checked":""  }}>Apr
                </label>
                <label class="form-check-inline">
                  <input type="checkbox" name="waktu_pengambilan[]" value="mei" {{in_array("mei", $waktu_pengambilan)? "checked":""  }}>Mei
                </label>
                <label class="form-check-inline">
                  <input type="checkbox" name="waktu_pengambilan[]" value="jun" {{in_array("jun", $waktu_pengambilan)? "checked":""  }}>Jun
                </label>
                <label class="form-check-inline">
                  <input type="checkbox" name="waktu_pengambilan[]" value="jul" {{in_array("jul", $waktu_pengambilan)? "checked":""  }}>Jul
                </label>
                <label class="form-check-inline">
                  <input type="checkbox" name="waktu_pengambilan[]" value="ags" {{in_array("ags", $waktu_pengambilan)? "checked":""  }}>Ags
                </label>
                <label class="form-check-inline">
                  <input type="checkbox" name="waktu_pengambilan[]" value="sep" {{in_array("sep", $waktu_pengambilan)? "checked":""  }}>Sep
                </label>
                <label class="form-check-inline">
                  <input type="checkbox" name="waktu_pengambilan[]" value="okt" {{in_array("okt", $waktu_pengambilan)? "checked":""  }}>Okt
                </label>
                <label class="form-check-inline">
                  <input type="checkbox" name="waktu_pengambilan[]" value="nov" {{in_array("nov", $waktu_pengambilan)? "checked":""  }}>Nov
                </label>
                <label class="form-check-inline">
                  <input type="checkbox" name="waktu_pengambilan[]" value="des" {{in_array("des", $waktu_pengambilan)? "checked":""  }}>Des
                </label>
              </div>
            </div>
            <br>
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