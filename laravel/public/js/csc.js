$(document).ready(function(){


    var host = window.location.href;    


   $("#slgoal").change(function() {


            $.getJSON(host + "/getIndiList/" + $("#slgoal option:selected").val(), function(data) {

             //console.log(data);            

                var temp = [];

                //CONVERT INTO ARRAY

                $.each(data, function(key, value) {

                    temp.push({v:value, k: key});

                });

                //SORT THE ARRAY

                temp.sort(function(a,b){

                   if(a.v > b.v){ return 1}

                    if(a.v < b.v){ return -1}

                      return 0;

                });

                //APPEND INTO SELECT BOX

                $('#slindi').empty();

                $('#slindi').append('<option>Pilih Indikator</option>');

                $('#slsub').empty();

                $('#slsub').append('<option>Pilih Sub Indikator</option>');

                $.each(temp, function(key, obj) {

                    $('#slindi').append('<option value="' + obj.k +'">' + obj.v + '</option>');

                });

            });                

            

        }); 


        $("#slindi").change(function() {


            $.getJSON(host + "/getSubIndiList/" + $("#slindi option:selected").val(), function(data) {

                //console.log(data);

                var temp = [];

                //CONVERT INTO ARRAY

                $.each(data, function(key, value) {

                    temp.push({v:value, k: key});

                });

                //SORT THE ARRAY

                temp.sort(function(a,b){

                   if(a.v > b.v){ return 1}

                    if(a.v < b.v){ return -1}

                      return 0;

                });

                //APPEND INTO SELECT BOX

                $('#slsub').empty();

                $.each(temp, function(key, obj) {

                    $('#slsub').append('<option value="' + obj.k +'">' + obj.v + '</option>');           

                });            

            });

            

        }); 


});//end of document ready