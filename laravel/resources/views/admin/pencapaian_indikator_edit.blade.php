@extends('layout.master_admin')

@section('title','Pencapaian Indikator SDGs')
@section('Judul','Pencapaian Indikator')
@section('JudulDesc','Ini adalah halaman pencapaian indikator dimana admin dapat melihat, menambah, memperbarui, dan menghapus data Pencapaian.')
@section('content')
<!-- Form -->
<div class="card shadow mb-4 w-75">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Form Pencapaian Indikator</h6>
  </div>
  <div class="card-body">
    <div class="card-body">
      <div class="table-responsive">
        <form method="POST" class="form-horizontal" action="{{route('pencapaian_indikator.store')}}">
          @csrf
          <div class="form-group">
            <label class="control-label col-sm-8" for="tahun">Tahun:</label>
            <div class="col-sm-4">
              <select class="form-control"name="tahun">
                <option value="">Pilih tahun</option>
                  <?php
                   for ($tahun = $thn_skr; $tahun >= 2010; $tahun--) {
                  ?>
                  <option type="number"value="{{$tahun}}"><?php echo $tahun ?></option>
                <?php } ?>
              </select>
            </div><br>
            <label class="control-label col-sm-8" for="goal">Goal ke:</label>
            <div class="col-sm-4">
              <select class="form-control" name="goal">
                <option value="">Pilih goal</option>
                @foreach($goals as $data_goals)
                  <option value="{{$data_goals->id_goal}}">SDG {{$data_goals->id_goal}}</option>
                @endforeach
              </select>
            </div><br>
            <label class="control-label col-sm-8" for="indikator">Indikator master:</label>
            <div class="col-sm-6">
              <select class="form-control" name="indikator">
                <option value="">Pilih indikator</option>
                @foreach($master as $data_indi)
                  <option value="{{$data_indi->id_indikator}}">{{$data_indi->indikator}}</option>
                @endforeach
              </select>
            </div><br>
            <label class="control-label col-sm-8" for="sub">Sub-indikator master:</label>
            <div class="col-sm-6">
              <select class="form-control" name="sub">
                <option value="">Pilih sub-indikator</option>
                @foreach($sub as $data_sub)
                  <option value="{{$data_sub->id_m_subindikator}}"> {{$data_sub->subindikator}} - {{$data_sub->sumberdata}}</option>
                @endforeach
              </select>
            </div><br>
            <div class="col-sm-6 md-form amber-textarea active-amber-textarea">
              <i class="fas fa-pencil-alt prefix"></i>
              <label for="form22">Nilai</label>
              <textarea name="nilai" id="form22" class="md-textarea form-control" rows="3">{{$pencapaian->nilai}}</textarea>
            </div><br>
            <div class="col-sm-6 md-form amber-textarea active-amber-textarea">
              <i class="fas fa-pencil-alt prefix"></i>
              <label for="form22">Keterangan</label>
              <textarea name="keterangan" id="form22" class="md-textarea form-control" rows="2">{{$pencapaian->keterangan}}</textarea>
            </div>
          </div>
          <label class="control-label col-sm-8" for="trend">Trend:</label>
          <div class="col-sm-4">
            <select class="form-control" name="trend">
              <option value="">Pilih pencapaian</option>
              @foreach($trends as $data_tren)
                <option value="{{$data_tren->id_trend}}">{{$data_tren->keterangan}}</option>
              @endforeach
            </select>
          </div><br>
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
