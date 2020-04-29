@extends('layout.master_admin')

<style>
#grafikGoal, #container, #pie {
	min-width: 310px;
	max-width: 1000px;
	height: 400px;
	margin: 0 auto
}
.collapsible {
  background-color: #f7f7f7;
  color: black;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: round;
  text-align: left;
  outline: none;
  font-size: 15px;
  margin: 10px 0px 0px 0px;
}

.activegrafik, .collapsible:hover {
  background-color: rgba(54, 185, 204, 0.1);
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: white;
  box-shadow: 5px 5px 5px #f4f2fa;
}
</style>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

@section('title_breadcrumb')
/ <a href="{{url()->previous()}}">SDGs {{$id_goal}}</a>
  @stop
@section('title_breadcrumb2')
/ Grafik
@stop

@section('title','Laporan SDGs')
@section('Judul','Laporan SDGs per Indikator')
@section('JudulDesc','Berikut adalah halaman pelaporan visual dalam bentuk beragam grafik yang dapat dilihat dibawah ini:')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Grafik</h6>
    </div>
    <div class="card-body">
      <div class="card-body">
		<button type="button" class="collapsible font-weight-bold text-primary">Grafik Garis <img src="/img/garis.png" style="width:3%; alt=""></button>
		<div class="content">
							<div class="card-body">
							<div id="garis" >
										<script>
										Highcharts.chart('garis', {
										title: {
												text: 'Goal {!! json_encode($id_goal) !!} : {!!($goal) !!}'
										},

										subtitle: {
											text: 'Indikator {!! json_encode($indi) !!}'
										},
										xAxis: {
												allowDecimals: false,
												labels: {
													formatter: function () {
														return this.value; // clean, unformatted number for year
													}
												},
												accessibility: {
													rangeDescription: ''
												}
											},
										yAxis: {
											title: {
												text: 'Nilai'
											}
										},
										legend: {
											layout: 'vertical',
											align: 'right',
											verticalAlign: 'middle'
										},

										plotOptions: {
											series: {
												label: {
													connectorAllowed: false
												},
												pointStart: 2017
											}
										},
										series: {!! json_encode($dataGrafik) !!},
										responsive: {
											rules: [{
												condition: {
													maxWidth: 1000
												},
												chartOptions: {
													legend: {
														layout: 'horizontal',
														align: 'center',
														verticalAlign: 'bottom'
													}
												}
											}]
										}
										});
										</script>
							</div>
							</div> 
		</div>


		<button type="button" class="collapsible font-weight-bold text-primary">Grafik Area  <img src="/img/area.png" style="width:3%; alt=""> </button>
		<div class="content">
						<div class="card-body">
						<div id="area">
							<script>
							// grafik basic area
							Highcharts.chart('area', {
								chart: {
									type: 'area'
								},
								accessibility: {
									description:' '
								},
								title: { 
									text: 'Goal {!! json_encode($id_goal) !!} : {!!($goal) !!}'
								},
								subtitle: {
									text: 'Indikator {!! json_encode($indi) !!}'
								},
								xAxis: {
									allowDecimals: false,
									labels: {
										formatter: function () {
											return this.value; // clean, unformatted number for year
										}
									},
									accessibility: {
										rangeDescription: ''
									}
								},
								yAxis: {
									title: {
										text: 'Nilai'
									},
									labels: {
										formatter: function () {
											return this.value;
										}
									}
								},
								tooltip: {
									pointFormat: '{series.name} : <b>{point.y:,.0f}</b>'
								},
								plotOptions: {
									area: {
										pointStart: 2017,
										marker: {
											enabled: false,
											symbol: 'circle',
											radius: 2,
											states: {
												hover: {
													enabled: true
												}
											}
										}
									}
								},

								series: {!! json_encode($dataGrafik) !!},
							});
							</script>
						</div>
						</div>
		</div>

		<button type="button" class="collapsible font-weight-bold text-primary">Grafik Batang <img src="/img/batang.png" style="width:3%; transform: rotate(90deg);" alt=""></button>
		<div class="content">
						<div class="card-body">
						<div id="batang">
							<script>
							// grafik batang
							Highcharts.chart('batang', {
								chart: {
									type: 'bar'
								},
								title: {
									text: 'Goal {!! json_encode($id_goal) !!} : {!!($goal) !!}'
								},
								subtitle: {
									text: 'Indikator {!! json_encode($indi) !!}'
								},
								xAxis: {
										categories: {!! json_encode($subindi) !!},
										title: {
												text: null
										}
								},
								yAxis: {
										min: 0,
										title: {
												text: 'Banyaknya nilai',
												align: 'high'
										},
										labels: {
												overflow: 'justify'
										}
								},
								tooltip: {
										valueSuffix: ' '
								},
								plotOptions: {
										bar: {
												dataLabels: {
														enabled: true
												}
										}
								},
								legend: {
										layout: 'vertical',
										align: 'left',
										verticalAlign: 'bottom',
										x: 40,
										y: -30,
										floating: true,
										borderWidth: 1,
										backgroundColor:
												Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
										shadow: true
								},
								credits: {
										enabled: false
								},
								series: {!! json_encode($dataGrafik2) !!},
							});
							</script>
						</div>
						</div> 
		</div>


		<button type="button" class="collapsible font-weight-bold text-primary">Grafik Batang <img src="/img/batang.png" style="width:3%;" alt=""></button>
		<div class="content">
						<div class="card-body">
						<div id="batang2">
								<script>

							Highcharts.chart('batang2', {
								chart: {
									type: 'column'
								},
								title: {
									text: 'Goal {!! json_encode($id_goal) !!} : {!!($goal) !!}'
								},
								subtitle: {
									text: 'Indikator {!! json_encode($indi) !!}'
								},
								xAxis: {
									categories:  {!! json_encode($subindi) !!},
									crosshair: true
								},
								yAxis: {
									min: 0,
									title: {
										text: 'Nilai'
									}
								},
								tooltip: {
									headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
									pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
										'<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
									footerFormat: '</table>',
									shared: true,
									useHTML: true
								},
								plotOptions: {
									column: {
										pointPadding: 0.2,
										borderWidth: 0
									}
								},
								
								series: {!! json_encode($dataGrafik2) !!},
							});
							</script>
						</div>
						</div>
				
			</div>


		<button type="button" class="collapsible font-weight-bold text-primary">Grafik Pie <img src="/img/pie.png" style="width:3%;" alt=""></button>
		<div class="content">
						<div class="card-body">
						<div id="pie">
							<script>
							// grafik pie
							Highcharts.chart('pie', {
						chart: {
						plotBackgroundColor: null,
						plotBorderWidth: null,
						plotShadow: false,
						type: 'pie'
						},
						title: {
								text: 'Goal {!! json_encode($id_goal) !!} : {!!($goal) !!} ({!!($tahun_now)!!})'
						},
							subtitle: {
								text: 'Indikator {!! json_encode($indi) !!}'
							},
						tooltip: {
							pointFormat: '{series.name}: <b>{point.y}</b>'
						},
						plotOptions: {
							pie: {
								allowPointSelect: true,
								cursor: 'pointer',
								dataLabels: {
									enabled: true,
									format: '<b>{point.name}</b>: {point.percentage:.1f}%'
								}
							}
						},
						series: [{
							name: 'Nilai',
							colorByPoint: true,
									data: {!! json_encode($dataGrafik3) !!}
								}]
							});
							</script>
					</div>
					</div>
		</div>
	  </div>  
	</div>
</div>


<br>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("activegrafik");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>


<br>
@endsection
