<?php
if (isset($_REQUEST["texto"])) {
    $texto=$_REQUEST["texto"];
    print ("Cadena a buscar: $texto <br>");
}
if (isset($_REQUEST["sexo"])) {
    $sexo=$_REQUEST["sexo"];
    print ("eres : $sexo <br>");
}
if (isset($_REQUEST["extra"])) {
    $extra=$_REQUEST["extra"];
    print ("Extras :");
    foreach ($extra as $key => $value) {
        print ($value." ");
    }
}
if (isset($_REQUEST["oculto"])) {
    $oculto=$_REQUEST["oculto"];
    print ("<br>oculto: $oculto<br>");
}

if (isset($_REQUEST["password"])) {
    $password=$_REQUEST["password"];
 print ("Contraseña: $password<br>");
}
if (isset($_REQUEST["color"])) {
    $color=$_REQUEST["color"];
    print ("Color :$color <br>");
}
if (isset($_REQUEST["idioma"])) {
    $idioma=$_REQUEST["idioma"];
    print ("Idioma:");
    foreach ($idioma as $key => $value) {
        print ($value." ");
    }
}
if (isset($_REQUEST["descripcion"])) {
    $descripcion=$_REQUEST["descripcion"];
 print ("Descripcion: $descripcion<br>");
}
?>