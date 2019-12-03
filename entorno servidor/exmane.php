
<?php

print("<h1>Ejercicio 1</h1>");
$auxeje1=-100;
$eje1=array();
for ($i=-100; $i <=100 ; $i++) { 
    if ($i%2==0) {
        $eje1[] = $i;
    }
}
foreach ($eje1 as $key => $value) {
    if ($key%4==0) {
        unset($eje1[$key]);
    }
}
$reverso=array_reverse ($eje1);
foreach ($reverso as $key => $value) {
    print ("En la posision $key se encuentra el valor $value <br>");
}




print("<h1>Ejercicio 2</h1>");
$datos2=array(
array("palabra"=>"Melifluo", "definicion"=>"Sonido excesivamente dulce, suave o delicado", "tamano"=>6, "color"=>"rojo"),
array("palabra"=>"Inefable", "definicion"=>"Algo tan incleible que no puede ser expresado en palabras", "tamano"=>4, "color"=>"amarillo"),
array("palabra"=>"Etereo", "definicion"=>"Extremadamente delicado y ligero, algo fuera de este mundo", "tamano"=>4, "color"=>"verde"),
array("palabra"=>"Limerencia", "definicion"=>"Estado mental involuntario propio de la atracción romántica por parte de una persona hacia otra", "tamano"=>3, "color"=>"verde"),
array("palabra"=>"Serendipia","definicion"=>"Hallazgo afortunado e inesperado que se produce cuando se está buscando otra cosa distinta.","tamano"=>4,"color"=>"azul"),
array("palabra"=>"Arrebol","definicion"=>"Cuando las nubes adquieren un color rojo al ser iluminadas por los rayos del sol.","tamano"=>5,"color"=>"negro"),
array("palabra"=>"Iridiscencia","definicion"=>"Fenómeno óptico donde el tono de la luz varía creando pequeños arcoiris","tamano"=>7,"color"=>"rojo"),
array("palabra"=>"Elocuencia","definicion"=>"El arte de hablar de modo eficaz para deleitar o conmover.","tamano"=>1,"color"=>"amarillo"),
array("palabra"=>"Efímero","definicion"=>"Aquello que dura por un período muy corto de tiempo.","tamano"=>7,"color"=>"blanco"),
array("palabra"=>"Inmarcesible","definicion"=>"Que no puede marchitarse.","tamano"=>2,"color"=>"azul"));
$coloRGB=array("rojo"=>"FF000",
"amarillo"=>"FFFF00",
"verde"=>"00FF00",
"blanco"=>"FFFFFF",
"azul"=>"0000FF",
"negro"=>"000000");
    print ("<ul>");
    $tam="";
    $color1="";
    $colorfinal="";
    foreach ($datos2 as $key => $value) {
        foreach ($value as $key => $value2) {
           /* if ($key=="tamano") {
                $tam=$value2;
            }*/
            if ($key=="color") {
                $color1=$value2;
                foreach ($coloRGB as $key => $value) {
                   if ($key==$color1) {
                    $colorfinal=$value;
                }
                }
            }
            if ($key=="palabra") {
                print ("<li> <font size=".$value["tamano"]." color=\"#".$colorfinal."\">".$value2." :");
                
            }
            if ($key=="definicion") {
               print ($value2."</font></li>");
            }  
        }
    }
    print ("</ul><br><br>");
    
    asort ($datos2);
    print ("<ul>");
    $tam="";
    $color1="";
    $colorfinal="";
    foreach ($datos2 as $key => $value) {
        foreach ($value as $key => $value2) {
            if ($key=="tamano") {
                $tam=$value2;
            }
            if ($key=="color") {
                $color1=$value2;
                foreach ($coloRGB as $key => $value) {
                   if ($key==$color1) {
                    $colorfinal=$value;
                }
                }
            }
            if ($key=="palabra") {
                print ("<li> <font size=".$tam." color=\"#".$colorfinal."\">".$value2." :");
                
            }
            if ($key=="definicion") {
               print ($value2."</font></li>");
            }  
        }
    }
    print ("</ul>");
?>