<?php
print '<h2>1º Definir un array con valores numéricos. <br> 
Realizar la suma de todos los valores y guardarlo en una variable.<br>Mostrar la suma por pantalla</h1>';
$numeros=array();
   for ($i=0; $i <10 ; $i++) { 
        $numeros[$i]=rand(1,10);
    }
$suma=0;
foreach ($numeros as $key => $value) {
    $suma=$suma+$value;
}
echo 'La suma de la array es : '.$suma;
print '<h2>2º Definir un array que tenga claves de un caracter representando cada letra del alfabeto desde la a hasta la f.<br>
En la misma definición, asignarle a cada clave un nombre propio que comience con esa letra
.<br>Ejemplo array (‘a’=>’Amanda’); Mostrar el resultado por pantalla con var_dump.</h2>';
$alfabeto=array("a"=>'Amanda',"b"=>'Bertin',"c"=>'Claudia',"d"=>'Daniel',"e"=>'Eduardo',"f"=>'Francisco');
var_dump ($alfabeto);
print '<h2>3º Definir un array que tenga como valor diez títulos de películas.<br>
Utilizar la función sort para ordenarlos de forma alfabética y mostrarlo por pantalla con print_r.</h2>';
$peliculas=array('Joker','SpiderMan','Dora La exploradora','Batman','Viernes 13');
sort($peliculas);
print_r($peliculas);

print '<h2>4º Definir tres arrays: uno puramente asociativo, otro puramente enumerativo y otro mixto.<br>
Luego,guardar en una variable la suma de los elementos de los tres arrays y mostrarla por pantalla.</h2>';
$asociativo=array("a"=>'Amanda',"b"=>'Bertin',
                "c"=>'Claudia',"d"=>'Daniel',
                "e"=>'Eduardo',"f"=>'Francisco');
$enumerativo=array('marian','profesro','gabriel','coche');
$mixto=array(1 => 'uno', 2 => 'dos', "ganador" => 'marian');
foreach($asociativo as $tipo){
    echo $tipo.'---';
}
echo '<br>';
foreach($enumerativo as $tipo){
    echo $tipo.'---';
}
echo '<br>';
foreach($mixto as $tipo){
    echo $tipo.'---';
}
print '<h2>Ejercicio 5</h2>';
$paises = array ('alemania','brasil','italia','chile','uruguay','australia');
unset($paises[0]);
unset($paises[2]);
unset($paises[5]);
$paises[6]='argentina';
$paises[7]='bolivia';
sort($paises);
print_r ($paises);

print '<h2>6º Realizar un dado virtual en PHP mediante el uso de arrays.<br> 
Cada vez que se refresque la pantalla, deberá verse un número distinto al azar entre 1 y 6</h2>';
$dado=range(1,6);
echo $dado[rand(0,5)];
print '<h2>7ºA Realizar una ruleta virtual en PHP, de la misma manera que con el dado</h2>';
$ruleta=range(0,36);
echo $ruleta[rand(0,36)];
print '<h2>7ºB Definir un array de 5 elementos y asignar a cada uno de ellos un número. 
        <br>Mediante una estructura condicional, determinar si el promedio de los números son mayores o menores que 6. 
        <br>Mostrar un mensaje por pantalla informando el resultado.</h2>';
        $numeros=array(5,9,8,4,6);
        $media=0;
        foreach ($numeros as $key => $value) {
            $media=$media+$value;
        }
        $media=$media/5;
        if ($media>=6) {
            print 'La media es 6 o mayor ';
        }else {
            print 'La mendia es inferior a 6';
        }
print '<h2>8º Dado un array de 20 elementos que consiste en números reales (con coma decimal) y que cada elemento representa la venta del día de un comercio. 
<br>Calcular el promedio de venta por día utilizando alguna estructura iterativa. 
<br>Mostrar el resultado por pantalla</h2>';  
$numeros=array();
$media=0;
for ($i=0; $i <=20 ; $i++) { 
    $numeros[$i]=rand(1000,20000)/100;
    $media=$media+$numeros[$i];
}
print 'La media de venta diaria es de : '.$media.' €';
print '<h2>9º Dado el siguiente array: $nombres = array (‘roberto’,’juan’,’marta’,’moria’,’martin’,’jorge’,’miriam’,’nahuel’,’mirta’). 
Realizar un programa en PHP que lo recorra y genere un nuevo array con aquellos nombres que comiencen con la letra m. 
<br>Definir qué bucle conviene usar y luego mostrar el array por pantalla sin usar var_dump ni print_r. 
Los nombres deben aparecer separados por coma.</h2>';
$nombres = array ('roberto','juan','marta','moria','martin','jorge','miriam','nahuel','mirta');
$resultado=preg_grep('/m+/',$nombres);
foreach ($resultado as $key => $value) {
    print $value.', ';
}
print "<h2>10º Realizar un programa que arme la estructura 
 HTML de una tabla con 20 filas y 10 columnas utilizando dos bucles for. 
Dentro de las celdas debe ponerse una letra O.</h2>";
print '<table border=1>';
for ($i=0; $i <=20 ; $i++) { 
    echo "<tr>"; 
    for ($k=0; $k <=10; $k++) { 
        print '<td>O</td>';
    }
    echo "</tr>";
}
print '</table>';
print '<h2>11º Dado un array enumerativo de 10 elementos de números enteros (sin coma decimal), 
encontrar el máximo de todos esos númerosusando una estructura iterativa y mostrarlo por pantalla.</h2>';
$numeros=array();
$mayor=0;
for ($i=0; $i <=9 ; $i++) { 
    $numeros[$i]=rand(0,2000);
    if ($numeros[$i]>$mayor) {
        $mayor=$numeros[$i];
    }
}
print 'El mayor es : '.$mayor;
print '<h2>12º Idem anterior pero encontrar el mínimo.</h2>';

$mayor=99999;
for ($i=0; $i <=9 ; $i++) {
    if ($numeros[$i]<$mayor) {
        $mayor=$numeros[$i];
    }
}
print 'El menor es : '.$mayor;
print '<h2>13º Hacer un programa que calcule todos los números primos entre 1 y 50 y los muestre por pantalla. 
<br> Un número primo es un número entero que sólo es divisible por 1 y por sí mismo</h2>';
$contador=0;
for ($i=1; $i <=50; $i++) { 
    for ($k=2; $k <=$i ; $k++) { 
        if ($i%$k==0) {
            $contador++;
        }
    }
    if ($contador==1) {
        print 'El numero '.$i.' es primo<br>';
    }
    $contador=0;
}
?>