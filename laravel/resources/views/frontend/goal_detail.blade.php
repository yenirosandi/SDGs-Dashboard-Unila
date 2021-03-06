@extends('frontend.master')

@section('title', 'SDGs')

@section('content')
<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
				<li class="breadcrumb-item active"  aria-current="page">Detail Goal {{$id}}</a></li>
			</ol>
		</nav>

		<h6>SUSTAINABLE DEVELOPMENT GOALS</h6>
		<hr>
      <!-- ***** Preloader Start ***** -->
      <div id="preloader">
        <div class="mosh-preloader"></div>
    </div>

    <div class="row">
        @foreach  ($goal_detail as $goal)
        <div class="col-md-3 col-xs-12">
            <div class-"thumbnail">
                <img src="/{{$goal->gambar}}" style="width:225px; height:225px;"class="card-img">
            </div>
        </div>
        <div class="col-md-8 col-md-offset-1">
            <h2><?php echo ucwords($goal->nama_goal); ?>
              </h2>
            <p style="text-align:justify; color:black">{{$goal->deskripsi_goal}} </p>

        </div>

        @endforeach

    </div>

    <br><br>
    <h4>Tabel</h4>


    <form action="{{route('goaldetail.pdf', $goal->id_goal )}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- <div class="container"> -->
                <div class="row">
                <label for="from" class="col-form-label" style="margin-left:5%;">Dari</label>
                    <div class="col-md-3">
                        <select id="from" class="form-control"name="from" required>
                                  <option value="">Pilih tahun</option>
                                  @foreach($thn_didb as $thn_skr)
                                    <option type="number"value="{{$thn_skr->tahun}}">{{$thn_skr->tahun}}</option>
                                  @endforeach
                        </select>
                    </div>

                    <div class="col-md-4">
                       <!-- <button type="submit" class="btn btn-primary btn-sm" name="search" >Cari</button> -->
                        <button type="submit" class="btn btn-info btn-sm" name="exportPDF">Unduh PDF</button>
                    </div>

                </div>
            <!-- </div> -->
    </form>
		<label  style="margin-top:10px; font-size:12px; "> *Data dalam rentang waktu 5 tahun (Jika sudah diinputkan) </label>


    <br><br>

        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="auto" cellspacing="0">
            <thead>
              <tr>
                <th style="text-align:center; vertical-align:middle;" rowspan="2">No.</th>
                <th style="text-align:center; vertical-align:middle;" rowspan="2">Indikator</th>
                <th style="text-align:center; vertical-align:middle;" rowspan="2">Sumber Data</th>
                <th style="text-align:center; vertical-align:middle;" colspan="2" rowspan="2">Baseline (2018)</th>
                <th style="text-align:center; vertical-align:middle;" colspan="{{$kolomtahun}}">Realisasi Pencapaian</th>
              </tr>
              <tr>
                @for ($thn=2019; $thn <= $tahun_now; $thn++)
                  <th colspan="2" style="text-align:center; vertical-align:middle;" >{{$thn}}</th>
                @endfor
              </tr>
            </thead>
            <tbody>
            @foreach($data as $data_sub)
              <tr>
                <!-- <td style="text-align:center; vertical-align:middle;" colspan="6" disable>Belum ada data</td> -->
                  @if($data_sub->indikator->indikator!=$indikator)
                    <th style="background-color:#e8f1ff;" colspan="{{$kolomindi}}">{{$data_sub->indikator->indikator}}<a href="{{route('grafik', $data_sub->indikator->id_indikator )}}"> (Grafik <span style="width:30px; height:30px"><img src="{{url('img/statistics.png')}}" style="width:1.5%;" alt="">)</span></a></th>
                  @endif
                <?php $indikator=$data_sub->indikator->indikator; ?>
              </tr>
              <tr>
                @if($data_sub->subindikator!=$subindi)
                  <td style='text-align:center;border-bottom:none;border-right:none;'>{{$no}}.</td>
                  <?php $no++; ?>
                  <td style='border-left:none; border-bottom:none;'>{{$data_sub->subindikator}}</td>
                @else <td style="border-bottom:none;border-top:none" colspan="2"></td>
                @endif
                <?php $subindi=$data_sub->subindikator; ?>

                @if($data_sub->fk_id_indikator==$data_sub->indikator->id_indikator)
                  <td>{{$data_sub->fsumberdata->sumberdata}}</td>
                @endif
                <!-- <style>
                  td:empty{border-bottom:none;border-top:none} /* style css3 untuk kolom kosong */
                </style> -->
                {{-- menampilkan jumlah colom berdasarkan range tahun --}}
                @for($tahun = 2018; $tahun <= $tahun_now; $tahun++)
                  <td>
                    @foreach($dcapai as $capai)
                      @if ($tahun == $capai->tahun && $data_sub->id_m_subindikator == $capai->fk_id_m_subindikator)
                          {{ $capai->nilai }}
                      @elseif(is_null($capai->tahun))
                        <p> - </p>
                      @endif
                    @endforeach
                  </td>
                  <td>
                    @foreach($dcapai as $capai)
                      @if ($tahun == $capai->tahun && $data_sub->id_m_subindikator == $capai->fk_id_m_subindikator)
                        <center>{!!$capai->trend->simbol_trend!!}</center>
                      @elseif(is_null($capai->tahun))
                        <p> - </p>
                      @endif
                    @endforeach
                  </td>
                @endfor
                
                @endforeach


              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


    </main>

@endsection
