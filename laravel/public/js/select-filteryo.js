$(document).ready(function(){


    var host = window.location.href;

    // Cubaan ngasal YENI
    $("#sltahun").change(function(){
      $.getJSON($("#sltahun").data("urlreq")  + "/" + $("#sltahun option:selected").val() +"/"+
          $("#slindi").data("urlreq")  + "/" + $("#slsub option:selected").val(), function(data) {

        var temp=[];
        //Dikonvert ke array
        $.each(data, function(key, value){
          // v itu nilai yang bakal dimunculin, k itu idnya!
          temp.push({v:value, k:key});
        });

        //Disort ke array
        temp.sort(function(a,b){
          if(a.v > b.v){return 1}
          if(a.v < b.v){return -1}
          return 0;
        });

        //Append ke text box nilai sebelumnya
        $('#nilai_sebelumnya').empty();

        $each(temp, function(key, obj){
          $('#nilai_sebelumnya').append(obj.v);
          console.log(obj);
        });
      });
    });

   $("#slgoal").change(function() {

   // + "/" + $("#slgoal option:selected").val()
            console.log($("#slgoal").data("urlreq"));
            $.getJSON($("#slgoal").data("urlreq")  + "/" + $("#slgoal option:selected").val(), function(data) {

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


            // $.getJSON(host + "/getSubIndiList/" + $("#slindi option:selected").val(), function(data) {
                $.getJSON($("#slindi").data("urlreq")  + "/" + $("#slindi option:selected").val(), function(data) {

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
                    console.log(obj);
                });

            });

        });


});//end of document ready
