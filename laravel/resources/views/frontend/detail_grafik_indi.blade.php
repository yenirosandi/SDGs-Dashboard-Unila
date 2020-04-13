@extends('frontend.master')
@section('title','Laporan SDGs')
@section('title_breadcrumb')
@section('content')
<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
				<li class="breadcrumb-item"><a href="{{url()->previous()}}">Detail Goal {{$id_goal}}</a></li>
				<li class="breadcrumb-item active" aria-current="page">Grafik  </li>
			</ol>
</nav>
<style>
#grafikGoal, #area, #batang, #batang2, #pie {
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

SUSTAINABLE DEVELOPMENT GOALS <hr>


<body>

  <!-- Grafik garis -->
  <div class="card shadow mb-4 w-100">
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


  <div class="card shadow mb-4 w-100">
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
  </div>


	<div class="card shadow mb-4 w-100">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Grafik Batang</h6>
		</div>
		<div class="card-body">
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
	</div>


	<div class="card shadow mb-4 w-100">
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


	<div class="card shadow mb-4 w-100">
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





</body>


