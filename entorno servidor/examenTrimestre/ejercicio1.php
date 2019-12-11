<?php
 if (isset($_REQUEST["nombre"])) {
    if (empty($_REQUEST["nombre"])) {
        print("Error con el nombre . Revise <br>");
    } else {
        $nombre=$_REQUEST["nombre"];
        print("Nombre: $nombre <br>");
        } 
}
if (isset($_REQUEST["apellidos"])) {
    if (empty($_REQUEST["apellidos"])) {
        print("Error con los apellidos . Revise<br>");
    } else {
        $apellidos=$_REQUEST["apellidos"];
        print("Apellidos: $apellidos <br>");
    } 
}

if (isset($_REQUEST["dni"])) {
    if (empty($_REQUEST["dni"])) {
        print("Error con el DNI . Revise<br>");
    } else {
        $dni=$_REQUEST["dni"];
        print("DNI: $dni <br>");
    } 
}
if (isset($_REQUEST["sexo"])) {
    if (empty($_REQUEST["sexo"])) {
        print("Error con el sexo . Revise<br>");
    } else {
        $sexo=$_REQUEST["sexo"];
        print("Sexo: $sexo<br>");
    } 
}
if (isset($_REQUEST["merito"])) {
    if (empty($_REQUEST["merito"])) {
        print("Error con el merito. Revise<br>");
    } else {
        $merito[]=$_REQUEST["merito"];
        print("Meritos :");
foreach ($merito as $key => $value) {
   print("<li>$value<li>");
}
    } 
}
if (isset($_REQUEST["pais"])) {
    if (empty($_REQUEST["pais"])) {
        print("Error con el pais de residencia  . Revise <br>");
    } else {
        $pais=$_REQUEST["pais"];
        print("Pais de residencia: $pais <br>");
        } 
}
if (isset($_REQUEST["comentario"])) {
    if (empty($_REQUEST["comentario"])) {
        print("Error con el comentario  . Revise <br>");
    } else {
        $comentario=$_REQUEST["comentario"];
        print("Comentario: $comentario <br>");
        } 
}

if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
    echo "Archivo : ". $_FILES['imagen']['name'] ."\n";
 }
?>