@extends('layout.master_admin')

@section('title','Edit Master Sub-Indikator SDGs')
@section('Judul','Edit Master Sub-Indikator')
@section('JudulDesc','Ini adalah halaman edit master sub-indikator dimana terdapat form untuk memperbarui data master sub-indikator.')
@section('content')
@section('title_breadcrumb','/ Edit Sub Indikator')

  
 <!-- Form -->
 <div class="card shadow mb-4 w-75">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Master Sub Indikator</h6>
    </div>
    <div class="card-body">
      <div class="card-body">
        <div class="table-responsive">
                                  <!-- {{-- menampilkan error validasi --}} -->
                                  <!-- @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif -->
          <form method="post" class="form-horizontal" action="{{route('master_sub_indikator.update',$edit_subindikators->id_m_subindikator)}}">
            {{ csrf_field() }}
            {{ method_field('put') }}
            <div class="form-group">
            <label class="control-label col-sm-8" for="goal">Goal ke:</label>
              <div class="col-sm-4">
              <select id="slgoal" class="form-control" name="goal" data-urlreq="{{ route('get.list.capaian.indikator') }}">
              <option value="" >Pilih Goal</option>
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
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-8" for="indikator">Indikator: </label>
              <div class="col-sm-10">
                 <select id="slindi" class="form-control" name="indikator" data-urlreq="{{ route('get.list.capaian.subindi') }}">
                  @foreach($fk_id_indikators as $key=>$value)
                  <option value="{{$value->id_indikator}}"{{$value->id_indikator==$edit_subindikators->fk_id_indikator?'selected':''}}> {{$value->indikator}} </option>
                  @endforeach
                </select>
              </div>
            </div>   
            <div class="form-group">
              <label class="control-label col-sm-10" for="subindikator">Sub Indikator:</label>
              <div class="col-sm-10">
                <input value="{{$edit_subindikators->subindikator}}" name="subindikator" type="text" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
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
                  <input type="checkbox" name="waktu_pengambilan[]" value="Jan" {{in_array("Jan", $waktu_pengambilan)? "checked":""  }}>Jan
                </label>
                <label class="form-check-inline">
                  <input type="checkbox" name="waktu_pengambilan[]" value="Feb" {{in_array("Feb", $waktu_pengambilan)? "checked":""  }}>Feb
                </label>
                <label class="form-check-inline">
                  <input type="checkbox" name="waktu_pengambilan[]" value="Mar" {{in_array("Mar", $waktu_pengambilan)? "checked":""  }}>Mar
                </label>
                <label class="form-check-inline">
                  <input type="checkbox" name="waktu_pengambilan[]" value="Apr" {{in_array("Apr", $waktu_pengambilan)? "checked":""  }}>Apr
                </label>
                <label class="form-check-inline">
                  <input type="checkbox" name="waktu_pengambilan[]" value="Mei" {{in_array("Mei", $waktu_pengambilan)? "checked":""  }}>Mei
                </label>
                <label class="form-check-inline">
                  <input type="checkbox" name="waktu_pengambilan[]" value="Jun" {{in_array("Jun", $waktu_pengambilan)? "checked":""  }}>Jun
                </label>
                <label class="form-check-inline">
                  <input type="checkbox" name="waktu_pengambilan[]" value="Jul" {{in_array("Jul", $waktu_pengambilan)? "checked":""  }}>Jul
                </label>
                <label class="form-check-inline">
                  <input type="checkbox" name="waktu_pengambilan[]" value="Ags" {{in_array("Ags", $waktu_pengambilan)? "checked":""  }}>Ags
                </label>
                <label class="form-check-inline">
                  <input type="checkbox" name="waktu_pengambilan[]" value="Sep" {{in_array("Sep", $waktu_pengambilan)? "checked":""  }}>Sep
                </label>
                <label class="form-check-inline">
                  <input type="checkbox" name="waktu_pengambilan[]" value="Okt" {{in_array("Okt", $waktu_pengambilan)? "checked":""  }}>Okt
                </label>
                <label class="form-check-inline">
                  <input type="checkbox" name="waktu_pengambilan[]" value="Nov" {{in_array("Nov", $waktu_pengambilan)? "checked":""  }}>Nov
                </label>
                <label class="form-check-inline">
                  <input type="checkbox" name="waktu_pengambilan[]" value="Des" {{in_array("Des", $waktu_pengambilan)? "checked":""  }}>Des
                </label>
              </div>
            </div>
            <br>
            <div class="form-group">
              <label class="control-label col-sm-8" for="waktu_pengambilan">Jenis Isian:</label>
              <div class="col-sm-6">
                <label class="form-check-inline">        
              @if ($edit_subindikators->isian == 'Angka')
                  <input type="radio" name="isian" value="Angka" checked> Angka<br>
                  <input type="radio" name="isian" value="Teks"> Teks
                @else
                <input type="radio" name="isian" value="Angka" > Angka<br>
                  <input type="radio" name="isian" value="Teks"checked> Teks
                @endif           
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
  
@endsection