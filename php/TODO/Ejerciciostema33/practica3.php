<?php
print '<h2>1º Almacena en un array los 10 primeros números pares. 
<BR>Imprímelos cada uno en una linea</h2>';
$pares=array();
for ($i=0; $i <20 ; $i++) { 
    if ($i%2==0) {
        $pares[$i]=$i;
    }
   
}
foreach ($pares as $key => $value) {
    print $value.'<br> ';
}
print '<h2>2º Imprime los valores del array asociativo siguiente usando la estructura de control foreach</h2>';
$v[1]=90;
$v[30]=7;
$v['e']=99;
$v['hola']=43;
foreach ($v as $key => $value) {
    print $value.'<br> ';
}
print '<h2>3º Realizar un programa que muestre las películas que se han visto. 
<br>Crear un array que contenga losmeses de enero, febrero, marzo y abril, 
asignando los valores 9, 12, 0 y 17, respectivamente. Si en alguno de los meses no se ha visto ninguna película, 
no ha de mostrar la información de ese mes</h2>';
$peliculas=array("enero"=>9,"febrero"=>12,"marzo"=>0,"abril"=>17);
foreach ($peliculas as $key => $value) {
    if ($value!=0) {
        print $key.': '.$value.'<br>';
    }
}
print '<h2>4º Crea un array e introduce los siguientes valores: Pedro, Ana, 34 y 1, respectivamente sin asignarel índice de la matriz. Muestra el esquema del array con print_r().</h2>';
$array=array('Pedro','Ana',34,1);
print_r($array);
print '<h2>5º Crea un array asociativo para introducir los datos de una persona<br>
Al acabar muestra los datos por pantalla</h2>';
$array=array("Nombre"=>'Pedro Torres',"Direccion"=>'C/ Mayor, 37',"Telefono"=>147852963);

foreach ($array as $key => $value) {
    print $key.': '.$value.'<br>';
}
print '<h2>6º Crea un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Angeles yChicago, sin asignar índices al array. A continuación, muestra el contenido del array haciendo unrecorrido diciendo el valor correspondiente a cada índice, ejemplo:La ciudad con el índice 0 tien el nombre Madrid</h2>';
 $ciudades=array('Madrid','Barcelona','Londres','New York','Los Angeles','Chicago');
 foreach ($ciudades as $key => $value) {
     print 'La ciudad con el indice '.$key.' se llama '.$value.'<br>';
 }
 print '<h2>7º Repite el ejercicio anterior pero ahora sí se ha de crear índices, ejemplo:El índice del array que contiene como valor Madrid es MD</h2>';
 $ciudades=array("MD"=>'Madrid',"BR"=>'Barcelona',"LO"=>'Londres',"NY"=>'New York',"LA"=>'Los Angeles',"CH"=>'Chicago');
 foreach ($ciudades as $key => $value) {
     print 'La ciudad con el indice '.$key.' se llama '.$value.'<br>';

 }

 print '<h2>8º Crea un array con los nombres Pedro, Ismael, Sonia, Clara, Susana, Alfonso y Teresa. 
 Muestra elnúmero de elementos que contiene y cada elemento en una lista no numerada</h2>';
$nombres=array('Pedro','Ismael','Sonia','Calara','Susana','Alfonso','Teresa');
echo 'El array tiene '.count($nombres).' elementos';
print '<ul>';
foreach ($nombres as $key => $value) {
    print '<li>'.$value.'</li>';
}
print '</ul>';

print '<h2>9º  Crea   un   array   llamado   “lenguajes_cliente”   y   otro   “lenguajes_servidor”,   crea   tu   mismo   losvalores, poniendo índices alfanuméricos  a cada valor. 
Junta ambos arrays en uno solo llamado“lenguajes” y muéstralo por pantalla en una tabla</h2>';
$lenguajes_cliente=array("C1"=>'html',"C2"=>'JavaScript',"C3"=>'css');
$lenguajes_servidor=array("S1"=>'ASP',"S2"=>'PHP',"S3"=>'JSP');
$lenguajes=array($lenguajes_cliente,$lenguajes_servidor);
 print '<table border=\'1px\'>';
 foreach ($lenguajes as $key => $value) {
     if ($key==0) {
        print '<th>Lenguajes clientes: </th>';     
    }else{
        print '<th>Lenguajes servidor: </th>'; 
    }
    foreach ($value as $key => $value) {
        print '<td>'.$value.'</td>';
    }
 }
 print '</table>';
 print '<h2>10º Rellena un array de 10 enteros con los 10 primeros números naturales. 
 Calcula la media de losque están en posiciones pares y muestra los impares por pantalla</h2>';
 $numeros=range(0,9);
 $media=0;
 foreach ($numeros as $key => $value) {
     if ($key%2==0) {
         $media+=$value;
     }else{
         print 'Posision: '.$key.' Valor '.$value.'<br>';
     }
 }
 print 'La mnedia de los de posiones pares es : '.$media/5;
 print '<h2>11º Rellena los siguientes tres arrays y júntalos en uno nuevo. Muéstralos por pantalla.
 <br>“Lagartija”, “Araña”, “Perro”, “Gato”, “Ratón”
 <br>“12”, “34”, “45”, “52”, “12”
 <br>“Sauce”, “Pino”, “Naranjo”, “Chopo”, “Perro”, “34”</h2>';
$numeros=array(12,34,45,12);
$animales=array('Lagartija','Araña','Perro','Gato','Raton');
$arboles=array('Suace','Pino','Naranjo','Chopo','Perro',34);
$todo=array_merge($numeros,$animales,$arboles);
foreach ($todo as $key => $value) {
    print $value.'<br>';
}

print '<h2>12º Realiza el ejercicio anterior pero utilizando la función array_push()</h2>';
$todo2=array();
foreach ($numeros as $key => $value) {
    array_push($todo2,$value);
}
foreach ($animales as $key => $value) {
    array_push($todo2,$value);
}
foreach ($arboles as $key => $value) {
    array_push($todo2,$value);
}
foreach ($todo2 as $key => $value) {
    print $value.'<br>';
}
?>