@extends('frontend.master')

@section('title', 'SDGs')

@section('content')
<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
				<li class="breadcrumb-item active"  aria-current="page">Detail Goal {{$id}}</a></li>
			</ol>
		</nav>

SUSTAINABLE DEVELOPMENT GOALS <hr>
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
        <!-- <div style="width: 0px; height: 225px; border: 1px #000 solid;"></div> -->
        <div class="col-md-8 col-md-offset-1">
            <h2><?php echo ucwords($goal->nama_goal); ?>
             <!-- <a href="{{action('HomeController@detailGoal', $goal->id_goal)}}"  class="btn btn-info btn-circle btn-sm ">
                <i class="fas fa-file-download">Cetak PDF</i> -->
              <!-- <a  data-toggle="modal" data-target="#cetakpdf" class="btn btn-info btn-circle btn-sm ">
              <i class="fas fa-file-download">Cetak PDF</i> -->
              </a> </h2>
            <p style="text-align:justify; color:black">{{$goal->deskripsi_goal}} </p>

        </div>

        @endforeach

    </div>




    <!-- <div id="cetakpdf" class= "modal fade" role= "dialog">
    <div class="modal-dialog">
        <div class="modal=content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"> &times;</button>
                <h4 class=" modal-title"> Cetak PDF Pencapaian</h4>
            </div>
            <div class="modal-body">
                <form action="{{url('HomeController@detailGoal', $goal->id_goal )}}" method="post" target="_blank">
                    <table>
                        <tr>
                            <td>
                                <div class="form-group">Dari tahun</div>
                            </td>
                            <td align="center" width="5%">
                                <div class="form-group">:</div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="date" class="form-control" name="thn1" required>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">Sampai tahun</div>
                            </td>
                            <td align="center" width="5%">
                                <div class="form-group">:</div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="date" class="form-control" name="thn2" required>
                                </div>
                            </td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>
                            <input type="submit" name="pdfgoal" class="btn btn-primary btn-sm" value="Cetak">
                          </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="modal-footer">
                <a href="" target="_blank" class="btn btn-primary btn-sm">Cetak Semua Pencapaian Tahun</a>
            </div>
        </div>
    </div>
</div> -->




    <br><br>
    <h4>Tabel</h4>


    <form action="{{route('goaldetail.search', $goal->id_goal )}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="container">
                <div class="row">
                <label for="from" class="col-form-label">Dari</label>
                    <div class="col-md-3">
                    <!-- <input type="date" class="form-control input-sm" id="from" name="from"> -->
                        <select id="from" class="form-control"name="from">
                                  <option value="">Pilih tahun</option>
                                    <?php
                                    $thn_skr=  date('Y');
                                    for ($tahun = $thn_skr; $tahun >= 2017; $tahun--) {
                                    ?>
                                    <option type="number"value="{{$tahun}}"><?php echo $tahun ?></option>
                                  <?php } ?>
                        </select>
                    </div>

                    
                    <div class="col-md-4">
                       <!-- <button type="submit" class="btn btn-primary btn-sm" name="search" >Cari</button> -->
                        <button type="submit" class="btn btn-secondary btn-sm" name="exportPDF">Unduh PDF</button>
                    </div>
                </div>
            </div>
    </form>

    <br><br>

        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="auto" cellspacing="0">
            <thead>
              <tr>
                <th style="text-align:center; vertical-align:middle;" rowspan="2">No.</th>
                <th style="text-align:center; vertical-align:middle;" rowspan="2">Indikator</th>
                <th style="text-align:center; vertical-align:middle;" rowspan="2">Sumber Data</th>
                <th style="text-align:center; vertical-align:middle;" colspan="2" rowspan="2">Baseline (2017)</th>
                <th style="text-align:center; vertical-align:middle;" colspan="{{$kolomtahun}}">Realisasi Pencapaian</th>
              </tr>
              <tr>
                @for ($thn=2018; $thn <= $tahun_now; $thn++)
                  <th colspan="2" style="text-align:center; vertical-align:middle;" >{{$thn}}</th>
                @endfor
              </tr>
            </thead>
            <tbody>
              @foreach($data as $data_sub)
              <tr>
                <!-- <td style="text-align:center; vertical-align:middle;" colspan="6" disable>Belum ada data</td> -->
                  @if($data_sub->indikator->indikator!=$indikator)
                    <th style="background-color:#e8f1ff; " colspan="{{$kolomindi}}">{{$data_sub->indikator->indikator}}<a href="{{route('grafik', $data_sub->indikator->id_indikator )}}"> <span style="width:30px; height:30px"><img src="{{url('img/bars-chart.png')}}" style="width:30px; height:30px" alt=""></span></a></th>
                  @endif
                <?php $indikator=$data_sub->indikator->indikator; ?>
              </tr>
              <tr>
                @if($data_sub->subindikator!=$subindi)
                  <td>{{$no}}</td>
                  <?php $no++; ?>

                  <td>{{$data_sub->subindikator}}</td>
                @else<td style="background-color:#f5f5f5;" colspan="2"></td>
                @endif
                <?php $subindi=$data_sub->subindikator; ?>

                @if($data_sub->fk_id_indikator==$data_sub->indikator->id_indikator)
                  <td>{{$data_sub->fsumberdata->sumberdata}}</td>
                @endif
                <!-- Buat nilai pencapaian -->


                <style>
                  td:empty{background:grey;} /* style css3 untuk kolom kosong */
                </style>


                @foreach($dcapai as $data_subs)

                  <?php $tahun=2017; ?>
                  @while($tahun<=$tahun_now)
                    @if($tahun==$data_subs->tahun && $data_sub->id_m_subindikator==$data_subs->fk_id_m_subindikator)
                      <td>{{$data_subs->nilai}}</td>
                      <td>
                        <center>
                          {!!$data_subs->trend->simbol_trend!!}
                        </center>
                      </td>

                      @elseif($data_subs->nilai=='')
                      <td></td>
                      <td></td>
                    @endif
                    <?php $tahun++ ?>

                  @endwhile

                @endforeach
                @endforeach
              </tr>



            </tbody>
          </table>
        </div>

    </main>

@endsection

