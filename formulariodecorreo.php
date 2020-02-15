<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>


<script
src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous"></script>
<LINK REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>



<div id="contenedor" class="container">
<form class="px-4 py-3" id="formcorreo" action="enviarCorreo.php" method="POST">
    <input type="text" value="" name="marcaU" id="marcaU" placeholder="marca" class="form-control" required>
    <div style="width:550px;height: 7px;"></div>
    <input type="text" value="" name="referenciaU" id="referenciaU" placeholder="referencia" class="form-control" required>
    <div style="width:550px;height: 7px;"></div>
    <input type="text" value="" name="modeloU" id="modeloU" placeholder="modelo" class="form-control" required>
    <label class="form-check-label" for="exampleCheck1"></label>
    <div style="width:550px;height: 7px;"></div>
    <select name="soatU" id="soatU" class="form-control" required>
        <option value="">vigencia de papeles</option>  
        <option value="a">DE 0 A 1 MES y 29 DIAS</option>
        <option value="b">DE 2 A 5 MESES Y 29 DIAS</option>
        <option value="c">DE 6 A 10 MESES Y 29 DIAS</option>
        <option value="d">DE 11 MESES A NUEVO</option>
    </select>
    <div></div>
    <input type="submit" value="Enviar" id="enviarU" name="enviarU" class="form-control" style="
   
    background-color: #ffcd00;
    font-weight: bold;
    color: #213f99;
    font-weight: bold;
    ">
    <div></div>
   <div id=res></div>
</form>
<input type="button" value="NO ENCUENTRO MI MOTO" id="encontrar" name="encontrar" class="form-control boton" 
style="background-color:#ffcd00;color: #213f99;font-weight: bold;" onclick="formulario()">

</div>