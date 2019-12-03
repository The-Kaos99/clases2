<?php
 print '<h2>1 Crea un array $dias con los días de la semana y muestra todas sus parejas<br> 
índices/valores mediante un bucle foreach y for</h2>';
$dias=array('Lunes','Martes','Miercoles'.'Jueves','Viernes','Sabado','Domingo');
foreach ($dias as $key => $value) {
    print 'Posisicon: '.$key.' Valor: '.$value.'<br>'; 
}
print '<h2>2 Crea un array con una lista de 5 alumnos de la clase. Muestra primero la lista de<br>
los 3 primeros alumnos del array y luego los dos últimos de la lista usando las<br>
funciones array_slice y array_splice</h2>'; 

$alumnos=array('Eduardo','Alvaro','Mariano','Laura','Hamza');

$aux=array_slice($alumnos,0,3);
foreach ($aux as $key => $value) {
    print  'Valor: '.$value.'<br>'; 
}

echo '<br>';
$aux=array_splice($alumnos,3);
foreach ($aux as $key => $value) {
    print  'Valor: '.$value.'<br>'; 
}
print '<h2>3 Crea un array de dos dimensiones, de manera que en una dimensión contenga<br>
el tipo de colores (fuerte o suave) y en la otra 3 colores de cada tipo. Muestra<br>
una tabla como la siguiente recorriendo el array:</h2>';

$colores=array($fuertes=array("rojo"=>'FF0000',"verde"=>'00FF00',"azul"=>'0000FF'),
    $suaves=array("rosa"=>'FE9ABC',"amarillo"=>'FDF189',"malva"=>'BC8F8F'));

	echo '<table border=1>';

	foreach ($colores as $clave=>$valor) {
        echo "<tr>";
		foreach ($valor as $clave2=>$valor2) {
			echo '<td bgcolor="'.$valor2.'">'.$clave2.' = '.$valor2.'</td>';
		}
		echo "</tr>";
	}
    echo "</table>";
    
    print '<h2>4 Dado el array anterior comprueba si en él se encuentra el color “FF88CC” y el
    color “FF0000” usando la función in_array.</h2>';

    $colores=array($fuertes=array("rojo"=>'FF0000',"verde"=>'00FF00',"azul"=>'0000FF'),
    $suaves=array("rosa"=>'FE9ABC',"amarillo"=>'FDF189',"malva"=>'BC8F8F'));
    echo '<table border=1>';
	foreach ($colores as $clave=>$valor) {
        echo "<tr>";
		foreach ($valor as $clave2=>$valor2) {
			echo '<td bgcolor="'.$valor2.'">'.$clave2.' = '.$valor2.'</td>';
		}
		echo "</tr>";
	}
    echo "</table>";
    $coinside= false;   
    $coinside2= false; 
    foreach($colores as $tipo){
        if (in_array('FF88CC',$tipo)) {
            $coinside=true;
        }
        if (in_array('FF0000',$tipo)) {
            $coinside2=true; 
        }
    }
    if ($coinside) {
        echo 'FF88CC esta<br>';
    }else{
        echo 'FF88CC No esta<br>'; }
        if ($coinside2) {
            echo 'FF0000 esta<br>';
        }else{
            echo 'FF0000 No esta<br>';
        }
        print '<h2>5 Crea un array llamado pila como éste:
        $pila = array(“cinco” => 5, “uno”=>1, “cuatro”=>4, “dos”=>2, “tres”=>3);
        Muestra el array ordenado por asort, arsort, ksort, sort, rsort</h2>';
        $pila = array("cinco"=> 5, "uno"=>1, "cuatro"=>4, "dos"=>2, "tres"=>3);         
        
sort($pila);
foreach($pila as $tipo){
    echo $tipo.'---';
}
echo '<br>';
asort($pila);
foreach($pila as $tipo){
    echo $tipo.'---';
}
echo '<br>';
arsort($pila);
foreach($pila as $tipo){
    echo $tipo.'---';
}
echo '<br>';
ksort($pila);
foreach($pila as $tipo){
    echo $tipo.'---';
}
echo '<br>';
rsort($pila);
foreach($pila as $tipo){
    echo $tipo.'---';
}
echo '<br>';
print '<h2>6 Crea un array con los países de la Unión Europea y sus capitales. Muestra por
cada uno de ellos la frase: “La capital de <<país>> es <<capital>>”. Luego
ordena la lista por el nombre del país y luego por el nombre de la capital.</h2>';
$paises=array("españa"=>'madrid',
                  "francia"=>'paris',
                  "italia"=>'roma',
                  "rumania"=>'bucuresti',
                  "republica checa"=>'praga'
    );
    foreach ($paises as $key => $value) {
        print ('La capital de '.$key.' es: '.$value.'<br>');
    }
    print '<h2>7 Obtén el número de valores iguales al valor 2 contenidos en un array de 10
    valores generados aleatoriamente con valores de 1 a 10</h2>';
    $numeros=array();
    for ($i=0; $i <10 ; $i++) { 
        $numeros[$i]=rand(1,10);
    }
    shuffle($numeros);
    $conntador=0;
    foreach ($numeros as $key) {
        echo $key.'<br>';
        if ($key==2) {
            $conntador++;
        }
    }
    echo '-----------------------<br>';
    echo 'El numero 2 salio : '.$conntador;
    echo '<br>-----------------------<br>';
   
   
?>