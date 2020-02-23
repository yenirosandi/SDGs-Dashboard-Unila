@extends('layout.master_admin')

<style>
#grafikGoal, #container, #pie {
	min-width: 310px;
	max-width: 1000px;
	height: 400px;
	margin: 0 auto
}

</style>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

@section('title','Laporan SDGs')
@section('Judul','Laporan SDGs per Indikator')
@section('JudulDesc','Berikut adalah halaman pelaporan visual dalam bentuk beragam grafik yang dapat dilihat dibawah ini:')
@section('content')
@section('title_breadcrumb','Detail Goal/Laporan SDGs Indikator')

  <!-- Grafik garis -->
  <div class="card shadow mb-4 w-75">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Grafik Garis</h6>
    </div>
    <div class="card-body">
      <div class="card-body">
        <div id="grafikGoal">
					<script>
					Highcharts.chart('grafikGoal', {
					title: {
							text: 'Goal {!! json_encode($id_goal) !!} : {!!($goal) !!}'
					},

					subtitle: {
					    text: 'Indikator {!! json_encode($indi) !!}'
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
  </div>

	<div class="card shadow mb-4 w-75">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Grafik Batang</h6>
		</div>
		<div class="card-body">
			<div class="card-body">
				<div id="container">
					<script>
					// grafik batang
					Highcharts.chart('container', {
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
								align: 'right',
								verticalAlign: 'top',
								x: -40,
								y: 80,
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
	</div>

	<div class="card shadow mb-4 w-75">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Grafik Pie</h6>
		</div>
		<div class="card-body">
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
						text: 'Goal {!! json_encode($id_goal) !!} : {!!($goal) !!}'
    			},
    			tooltip: {
        			pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    			},
    			plotOptions: {
        			pie: {
            			allowPointSelect: true,
            			cursor: 'pointer',
            			dataLabels: {
                			enabled: true,
                			format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            			}
        			}
    			},
    			series: [{
        			name: 'Brands',
        			colorByPoint: true,
        			data: [{
            			name: 'Chrome',
            			y: 61.41,
            			sliced: true,
            			selected: true
        			}, {
            			name: 'Internet Explorer',
            			y: 11.84
        			}, {
            			name: 'Firefox',
            			y: 10.85
        			}, {
            			name: 'Edge',
            			y: 4.67
        			}, {
            			name: 'Safari',
            			y: 4.18
        			}, {
            			name: 'Sogou Explorer',
            			y: 1.64
        			}, {
            			name: 'Opera',
            			y: 1.6
        			}, {
            			name: 'QQ',
            			y: 1.2
        			}, {
            			name: 'Other',
            			y: 2.61
        			}]
    				}]
					});
					</script>
			</div>
			</div>
		</div>
	</div>

<br>
@endsection
