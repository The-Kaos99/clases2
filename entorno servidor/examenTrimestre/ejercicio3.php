<form action="ejercicio3.php" method="POST">
         <p> Dame la altura del arbol <input type="number" name="altura"></p>
         <button type="submit">Enviar</button>
      </form>


<?php
 
 if (isset($_REQUEST["altura"])) {
    $altura=$_REQUEST["altura"];
}else{
    $altura=0;
}
if ($altura<=0) {
    echo ("No puedo hacer un arbol de naviada con numeros negativos o con 0 vuelve a intentarlo");
}
 $pintobara="\\";
    $pintar="";
$arbol=array("\\","\\");
//print_r ($arbol);
for ($i=$altura; $i != 0; $i--) { 
    
   for ($j=$i; $j !=0; $j--) { 
       print("\\");
   }
   print("<br>");
}
foreach ($arbol as $key => $value) {
   
}

?>