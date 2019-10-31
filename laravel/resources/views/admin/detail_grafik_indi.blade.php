<html>
    <!-- // Menyiapkan data untuk chart -->

      <!-- // dd(json_encode($categories));    -->
      

       <div class="row">

              <div id="grafikGoal"class="col-md-8 col-xs-12 panel">

              </div>




<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
Highcharts.chart('grafikGoal', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Goal'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: {!!json_encode($categories)!!} ,
        // categories:[' atu', 'dua'] ,
        crosshair: true,
    
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
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
    series: [{
        name: '2017',
        data: [49.9]

    }, {
        name: '2018',
        data: [83.6]

    }, {
        name: '2019',
        data: [48.9]

    }]  
});
  
</script>

</html>