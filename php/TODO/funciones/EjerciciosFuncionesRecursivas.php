<?php
/**
 * Calcular el factorial de un número
 */
print '<h2>Ejercicio 1</h2>';
function factorial($n){
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}
print factorial(4);
/**
 * Calcular el número de fibonacci. (F(1)=1, F(2)=1, F(X)=F(X-1)+F(X-2))
 */
print '<h2>Ejercicio 2</h2>';
function fibo($num ,$fib1=0,$fib2=1){
    $fib3=$fib1+$fib2; 
    if ($num>=4) {
        $num--;
        $fib3=fibo($num,$fib2,$fib3);
    }
     return $fib3;
}
for ($i=0; $i <=25; $i++) { 
    print fibo($i).'<br>';
}

/**
 * Division Rusa
 */
print '<h2>Ejercicio 3</h2>';
/*function rusa ($a,$b) {
    if ($a>$b) {
      $resto=$a-$b;
      $resu=rusa($resto,$b);      
    }
    return rusa($resto,$b);
}
print rusa(16,5);*/

?>