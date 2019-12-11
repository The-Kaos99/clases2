<?php
function division ($a, $b) {
    if($b > $a) {
     return 0;
    }
    else {
     return division($a-$b, $b) + 1;
    }
   } 
$resultado=division(16,5);
print($resultado);
?> 