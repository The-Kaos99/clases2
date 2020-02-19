<?php 
$enlace = mysqli_init();
$enlace->options( MYSQLI_OPT_CONNECT_TIMEOUT, 700 ) || die( 'mysqli_options croaked: ' . $enlace->error );
$enlace->real_connect('localhost', 'repo', 'repo', 'repo') || die( 'mysqli_real_connect croaked: ' . $enlace->error );
$conexion=mysqli_connect('localhost', 'repo', 'repo');
$conexion2->mysqli_real_connection($conexion, 'localhost', 'repo','repo', 'repo');
if ($enlace){
//$usuario = $enlace->escape_string($_POST['gigadede_usuario']);
//$contra = $enlace->escape_string($_POST['gigadede_contra']);

$sql = 'show tables ';
$resultado = $enlace->query($sql);
print_r("$resultado");
if ($fila = mysqli_fetch_array($resultado)){
//$_SESSION['usuario'] = $fila[0];
//$_SESSION['admin'] = $fila[1]==1 ? true : false;
header('Location: http://google.es');
} else {
$error = 'Usuario o contraseña incorrectos';
}
$enlace->close();
} else {
$error = 'Error al conectar a la base de datos';
}
?>