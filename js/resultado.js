
    $(document).on('ready',function(){       
    $('#enviar').click(function(){
        var url = "precio.php";
        $.ajax({                        
           type: "POST",                 
           url: url,                     
           data: $("#precio").serialize(), 
           success: function(data)             
           {
             $('#res').html(data);
            
           }
       });
    });
});


$(document).on("submit","#precio",function(e){
    e.preventDefault();
    document.getElementById('res').style.height='200px';
    document.getElementById('res').style.radius='10px';
    document.getElementById('res').style.background='2px solid #FFF';
    document.getElementById('contenedor').style.height='910px';
    
    $.post("precio.php",$("#precio").serialize(),function(res){
        $("#cargapost").html(res);
    });
})

/* border-radius: 10px; */
