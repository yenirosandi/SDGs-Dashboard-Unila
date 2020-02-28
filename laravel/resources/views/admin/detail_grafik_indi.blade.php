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

<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
				<li class="breadcrumb-item"><a href="{{url()->previous()}}">Detail Goal {{$id_goal}}</a></li>
				<li class="breadcrumb-item active" aria-current="page">Grafik  </li>
			</ol>
</nav>

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
  </div>

  <div class="card shadow mb-4 w-75">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Grafik Area</h6>
		</div>
		<div class="card-body">
			<div class="card-body">
				<div id="area">
                    <script>
                    // grafik basic area
                    Highcharts.chart('area', {
                        chart: {
                            type: 'area'
                        },
                        accessibility: {
                            description: 'Image description: An area chart compares the nuclear stockpiles of the USA and the USSR/Russia between 1945 and 2017. The number of nuclear weapons is plotted on the Y-axis and the years on the X-axis. The chart is interactive, and the year-on-year stockpile levels can be traced for each country. The US has a stockpile of 6 nuclear weapons at the dawn of the nuclear age in 1945. This number has gradually increased to 369 by 1950 when the USSR enters the arms race with 6 weapons. At this point, the US starts to rapidly build its stockpile culminating in 32,040 warheads by 1966 compared to the USSR’s 7,089. From this peak in 1966, the US stockpile gradually decreases as the USSR’s stockpile expands. By 1978 the USSR has closed the nuclear gap at 25,393. The USSR stockpile continues to grow until it reaches a peak of 45,000 in 1986 compared to the US arsenal of 24,401. From 1986, the nuclear stockpiles of both countries start to fall. By 2000, the numbers have fallen to 10,577 and 21,000 for the US and Russia, respectively. The decreases continue until 2017 at which point the US holds 4,018 weapons compared to Russia’s 4,500.'
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
			<h6 class="m-0 font-weight-bold text-primary">Grafik Batang</h6>
		</div>
		<div class="card-body">
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

<br>
@endsection
