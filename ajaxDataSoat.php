<?php

if(isset($_POST['modelo']) && !empty($_POST['modelo'])){
 echo "
 <option value=\"\">VIGENCIA DE SOAT</option>
 <option value=\"a\">DE 0 A 1 MES y 29 DIAS</option>
 <option value=\"b\">DE 2 A 5 MESES Y 29 DIAS</option>
 <option value=\"c\">DE 6 A 10 MESES Y 29 DIAS</option>
 <option value=\"d\">DE 11 MESES A NUEVO</option>
 ";
 }
 

?>
