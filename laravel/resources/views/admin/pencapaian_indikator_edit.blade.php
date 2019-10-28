@extends('layout.master_admin')

@section('title','Edit Pencapaian Indikator SDGs')
@section('Judul','Edit Pencapaian Indikator')
@section('JudulDesc','Ini adalah halaman edit pencapaian indikator dimana admin dapat memperbarui data Pencapaian.')
@section('content')
<!-- Form -->
<div class="card shadow mb-4 w-75">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Form Pencapaian Indikator</h6>
  </div>
  <div class="card-body">
    <div class="card-body">
      <div class="table-responsive">
        <form method="POST" class="form-horizontal" action="{{route('pencapaian_indikator.update',$edit_pencapaian->id_pencapaian)}}">
          {{ csrf_field() }}
          {{ method_field('put') }}
          <div class="form-group">
            <label class="control-label col-sm-8" for="tahun">Tahun:</label>
            <div class="col-sm-4">
              <select class="form-control"name="tahun">
                <!-- @foreach($edit_pencapaian as $key=>$value)
                    <?php
                    if($key!=0){
                        $pencapaian_fk=DB::table('t_pencapaian')->select('t_pencapaian.*')->where('tahun',$key)->get();
                        if(count($pencapaian_fk)>0){
                            foreach ($pencapaian_fk as $capai_tahun){?>
                              <option value="{{$capai_tahun->tahun}}"{{$pencapaian->tahun==$capai_tahun->tahun?' selected':''}}>SDG {{$capai_tahun->tahun}}</option>
                              <?php for ($tahun = $thn_skr; $tahun >= 2010; $tahun--)?>
                              <option type="number"value="{{$tahun}}"><?php echo $tahun ?></option>
                        <?php }
                        }
                    }
                    ?>
                @endforeach -->
                  <option type="number"value="{{$edit_pencapaian->tahun}}">{{$edit_pencapaian->tahun}}</option>
                  <?php for ($tahun = $thn_skr; $tahun >= 2010; $tahun--) {?>
                  <option type="number"value="{{$tahun}}"><?php echo $tahun ?></option>
                <?php } ?>
              </select>
            </div><br>
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
            <label class="control-label col-sm-8" for="indikator">Indikator master:</label>
            <div class="col-sm-10">
              <select id="slindi" class="form-control" name="indikator">
                  @foreach($fk_id_indikators as $key=>$value)
                  <option value="{{$value->id_indikator}}"{{$value->id_indikator==$edit_pencapaian->fk_id_indikator?'selected':''}}> {{$value->indikator}} </option>
                      <?php
                      /*
                      if($key!=0){
                          $pencapaian_fk_indi=DB::table('t_m_indikator')->select('id_indikator','indikator')->where('id_indikator',$key)->get();
                          if(count($pencapaian_fk_indi)>0){
                              foreach ($pencapaian_fk_indi as $capai_indi_master){?>
                                <option value="{{$capai_indi_master->id_indikator}}"{{$edit_fk_id_indikators->id_indikator==$capai_indi_master->id_indikator?' selected':''}}> {{$capai_indi_master->indikator}} </option>
                                <option value="{{$capai_indi_master->id_indikator}}"{{$edit_fk_id_indikators->id_indikator==$capai_indi_master->id_indikator?' selected':''}}> {{$capai_indi_master->indikator}} </option>
                          <?php }
                          }
                    */
                      ?>
                  @endforeach
              </select>
            </div><br>
            <label class="control-label col-sm-8" for="sub">Sub-indikator master:</label>
            <div class="col-sm-10">
              <select  id="slsub" class="form-control" name="sub">
                  @foreach($fk_id_m_subindikators as $key=>$value)
                      <?php
                      if($key!=0){
                          $pencapaian_fk_sub=DB::table('t_m_subindikator')
                            ->join('t_m_sumberdata','fk_id_m_sumberdata','=','t_m_sumberdata.id_m_sumberdata')
                            ->select('t_m_subindikator.*','t_m_sumberdata.*')
                            ->where('id_m_subindikator',$key)
                            ->get();
                          if(count($pencapaian_fk_sub)>0){
                              foreach ($pencapaian_fk_sub as $capai_indi_sub){?>
                                <option value="{{$capai_indi_sub->id_m_subindikator}}"{{$edit_fk_id_m_subindikators->id_m_subindikator==$capai_indi_sub->id_m_subindikator?' selected':''}}> {{$capai_indi_sub->subindikator}}-{{$capai_indi_sub->sumberdata}}</option>
                          <?php }
                          }
                      }
                      ?>
                  @endforeach
              </select>
            </div><br>
            <div class="col-sm-6 md-form amber-textarea active-amber-textarea">
              <i class="fas fa-pencil-alt prefix"></i>
              <label for="form22">Nilai</label>
              <textarea name="nilai" id="form22" class="md-textarea form-control" rows="3">{{$edit_pencapaian->nilai}}</textarea>
            </div><br>
            <div class="col-sm-6 md-form amber-textarea active-amber-textarea">
              <i class="fas fa-pencil-alt prefix"></i>
              <label for="form22">Keterangan</label>
              <textarea name="keterangan" id="form22" class="md-textarea form-control" rows="2">{{$edit_pencapaian->keterangan}}</textarea>
            </div>
          </div>
          <label class="control-label col-sm-8" for="trend">Trend:</label>
          <div class="col-sm-4">
            <select class="form-control" name="trend">
              @foreach($fk_id_trends as $key=>$value)
                  <?php
                  if($key!=0){
                      $pencapaian_fk_trend=DB::table('t_trends')->select('id_trend','keterangan')->where('id_trend',$key)->get();
                      if(count($pencapaian_fk_trend)>0){
                          foreach ($pencapaian_fk_trend as $capai_indi_trend){?>
                            <option value="{{$capai_indi_trend->id_trend}}"{{$edit_fk_id_trends->id_trend==$capai_indi_trend->id_trend?' selected':''}}> {{$capai_indi_trend->keterangan}} </option>
                      <?php }
                      }
                  }
                  ?>
              @endforeach
            </select>
          </div><br>
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
