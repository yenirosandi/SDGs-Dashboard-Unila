<html>
    <!-- // Menyiapkan data untuk chart -->
<?php
        $categories =[];
?>
        @foreach ($data_capai as $data_persub){
        $categories[]= $data_persub->tahun;
        }


        @endforeach
        
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
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rainfall (mm)'
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
        name: 'Tokyo',
        data: [49.9, 71.5]

    }, {
        name: 'New York',
        data: [83.6, 78.8]

    }, {
        name: 'London',
        data: [48.9, 38.8]

    }, {
        name: 'Berlin',
        data: [42.4, 33.2]

    }]
});

</script>

</html>