<?php

// aqui se modifica la conexion  a la base de datos 
$host = 'localhost';
$db = 'mariano';
$user = 'root';
$password = "";
$enlace = mysqli_connect("$host", "$user", "$password", "$db");
if (mysqli_connect_errno()) {
    printf("Fallo de conexion : ", mysqli_connect_errno());
    exit();
}
?>