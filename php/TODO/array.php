<?php
 $paises=array(
    array('Alemania','Berlin',557046,78420000),
    array('Austria','Viena',83849,7614000),
    array('Belgica','Bruselas',30518,9932000));
    print_r( $paises);
    for ($i=0;$i<count($paises);$i++){
        for ($j=0;$j<count($paises[$i]);$j++){
            echo $paises[$i][$j];
        }
    echo "<br>";
    }
?>