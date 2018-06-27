
$("#especialidades").change(function(event){
    $.get("tratamientos/"+event.target.value+"",function(response,cirujano){
        $("#tratamientos").empty();
        for(i=0;i<response.length;i++){
            $("#tratamientos").append("<option value='"+response[i].id+"'>"+response[i].nombre+"</option>");
        }
    });
    $.get("cirujanos/"+event.target.value+"",function(response,cirujano){
        $("#cirujanos").empty();
        for(i=0;i<response.length;i++){
            $("#cirujanos").append("<option value='"+response[i].id+"'>"+response[i].name+"</option>");
        }
    });
});