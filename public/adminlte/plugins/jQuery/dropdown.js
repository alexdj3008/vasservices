$("#tratamientos").change(function(event){
    $.get("cirujanos/"+event.target.value+"",function(response,cirujano){
        console.log(response);
    });
});

$("#especialidades").change(function(event){
    $.get("tratamientos/"+event.target.value+"",function(response,cirujano){
        console.log(response);
        for(i=0;i<response.length;i++){
            $("#tratamientos").append("<option value='"+response[i].id+"'>"+response[i].nombre+"</option>");
        }
    });
    $.get("cirujanos/"+event.target.value+"",function(response,cirujano){
        console.log(response);
        for(i=0;i<response.length;i++){
            $("#cirujanos").append("<option value='"+response[i].id+"'>"+response[i].name+"</option>");
        }
    });
});