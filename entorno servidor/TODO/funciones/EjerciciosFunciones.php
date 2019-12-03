<?php

/**
 * En    el    siguiente    código    añade    la    
 * definición    deuna    función llamada calculaCantidad()que 
 * calcule los intereses que obtendría al depositar su dinero en un banco durante un cierto tiempo:
 */
print 'Ejercicio 1<br>';
function calculaCantidad ($annos,$dinero,$interes){
    $ahorros=($dinero*($interes/100)*$annos)+$dinero;
    return $ahorros;
}

$interes=5;
echo "<p><b>El interés actual es $interes%.</b></p>" ;
echo " <p>Si usted deposita 100 &#x20AC; hoy, sus ahorros crecerán a" ;
echo calculaCantidad(5 , 100,$interes) ;
echo "&#x20AC; en 5 años.</p>" ;
echo " <p>Si usted deposita 1.500&#x20AC; hoy, sus ahorros crecerán a" ;
echo calculaCantidad(20 , 1500,$interes) ;
echo "&#x20AC; después de 20 años.</p>" ;

/**
 * Realizauna  función  que  pueda  recibir  tres  parámetros:  el  nombre  de  un  país,  la capital  (si  no  recibe  capital  tomará  el  valor  Madrid) 
 *  y  el  número  de  habitantes  (si no recibe este valor mostrará “muchos”) y
 *  llámalapara mostrar una frase con esos valores del tipo: 
 * La capital de España es Madrid y tiene muchos habitantes
 * .La capital de Portugal es Lisboa y tiene muchos habitantes.
 * La capital de Francia es Paris y tiene 6.000.000 habitantes.
 * Llámala con   diferente   número   de   argumentos   para   comprobar   que   toma correctamente los valores por defecto
 */

print 'Ejercicio 2 <br>';
function paises($pais, $capital="madrid",$pob="muchos"){
print 'La capital de '.$pais.' es '.$capital.' La poblacion es '.$pob.'<br>';
}
paises("rumania","bucarest",9530000);
paises("España");
paises("portugal","Lisboa");
/**
 * Realizauna  función que reciba  como  parámetro un número  entero  (el número  de días ) 
 * y devuelva el número de segundos de esos días.
 */
print 'Ejercicio 3 <br>';
function dias($dias){
    $seg=$dias*86400;
    return $seg;
}
print 'segundos: '.dias(8);
/**
 * Realiza una  función  que  reciba  como  
 * parámetro  el  título  de  la  página  y  escriba  el encabezado html, 
 * el head y el títle de la misma
 */
print '<br>Ejercicio 4 <br>';
print 'Echo en el php con un print <br>';
function crearhtml($titulo){
print '<!DOCTYPE html>
<html lang="en">
<head>
    <title>'.$titulo.'</title>
</head>
<body>
    
</body>
</html>';}
crearhtml("pagina web alal");
/**
 * Realizauna  función  que  reciba  como  parámetro  dos  números  
 * y  devuelva  la semisuma de los mismos (la suma dividida por dos).
 */
print 'Ejercicio 5 <br>';
function semisuma($a,$b){
return $semi=($a+$b)/2;
}
print semisuma(50,10);
/**
 * Realizauna  función  que  reciba  como  parámetro  un  texto  y  
 * lo  devuelva  escrito  en negrita.
 */
print '<br>Ejercicio 6 <br>';
function negro($a){
   return $negro='<b>'.$a.'</b>';
}
print negro("<br>soy un texto negro <br>");
/**
 * Realizados  funciones  que  reciban  como  parámetro  un  número  y  
 * una  de  ellas devuelva el cuadrado del número y otra el cubo
 */
print '<br>Ejercicio 7 <br>';
function uno($a){
    return $a*$a;
}
function dos($a){
    return $a*$a*$a;
}
print 'El cuadrado de 2 es: '.uno(2).'<br>';
print 'El cubo de 2 es: '.dos(2).'<br>';
/**
 * Realiza una función que reciba como parámetro un número y
 * calcule el sumatorio de ese número (suma los n-1 enteros anteriores a n)
 */
function sumatorio($a){
    $a=$a-1;
    $suma=0;
    for ($i=0; $i <=$a; $i++) { 
    $suma=$suma+$i;
    }
    return  $suma;
}
print sumatorio(6);
?>