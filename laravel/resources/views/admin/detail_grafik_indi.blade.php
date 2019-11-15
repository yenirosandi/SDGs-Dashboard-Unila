<html>
<style>
#grafikGoal {
	min-width: 310px;
	max-width: 1000px;
	height: 400px;
	margin: 0 auto
}</style>

       <div class="row">

              <div id="grafikGoal">

      </div>



<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

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


</html>
