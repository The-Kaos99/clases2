<?php
 require_once ('../bd.php');
$query="select * from profesores ";
$result=mysqli_query($enlace, $query);
  while ($row=mysqli_fetch_array($result)) {
    $json[]=array(
        'nombre'=>$row['nombre'],
        'apellidos'=>$row['apellidos'],
        'email'=>$row['email']
    );
  }

$jsonstring = json_encode($json);
 echo $jsonstring;
?>