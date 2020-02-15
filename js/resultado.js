
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
    //        
        var varmarca = document.getElementById("marca"); 
        var varreferencia = document.getElementById("referencia");
        
        var varmodelo = document.getElementById("modelo");

        var varsoat = document.getElementById("soat");

        var varcorreo = document.getElementById("correo");
    
        var vartelefono = document.getElementById("telefono");

        var varcheck = document.getElementById("exampleCheck1");
    //
    if(varmarca.value==0 || varmodelo.value==0 || varsoat.value==0 || varcorreo.value==0 || vartelefono.value==0 || varcheck.value==0 ){
    
        document.getElementById('res').style.height='20px';}
    else{
    document.getElementById('res').style.height='200px';
    document.getElementById('res').style.radius='10px'; 
    document.getElementById('res').style.background='2px solid #FFF';}
    document.getElementById('contenedor').style.height='950px';
    
    $.post("precio.php",$("#precio").serialize(),function(res){
        $("#cargapost").html(res);
    });
})
