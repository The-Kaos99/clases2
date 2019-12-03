<?php

if (!isset($_GET["fondo"])){
    $fondo=null;
}else{
    $fondo=$_GET["fondo"];
}
include 'cabecera.php';
    print ' <a href="./eje1.php?fondo=fondoprojo">Fondo Rojo</a><br>
            <a href="./eje1.php?fondo=fondopazul">Fondo Azul</a><br>
            <a href="./eje1.php?fondo=null">Sin fondo</a><br>';
     for ($i=0; $i <50 ; $i++) { 
         $aux2=$i+1;
         $aux1="var".$aux2;
         $$aux1=$i+1;
         print '<p>'.$aux1.' es : '.$$aux1.'</p>';
     }
     print '</div>';
include 'pie.php';
?>