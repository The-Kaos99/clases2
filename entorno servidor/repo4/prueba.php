<?php

$servidor = "localhost";
$nombreusuario = "repo";
$password = "repo";
$db = "repo";

$conexion = new mysqli($servidor, $nombreusuario, $password, $db);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

echo "Conexión exitosa...";
$sql = "CREATE TABLE todoTable(
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    texto VARCHAR(100) NOT NULL,
    completado BOOLEAN NOT NULL,
    timestamp TIMESTAMP
)";
/* EJECTUAR EN LA BASE DE DATOS
if($conexion->query($sql) === true){
echo "La tabla se creó correctamente...";
}else{
die("Error al crear tabla: " . $conexion->error);
}*/
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="texto" id="texto">
        <input type="submit" value="Añadir pendiente">
    </form>
    <div id="todolist">
        <?php

$conexion = new mysqli($servidor, $nombreusuario, $password, $db);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

//Validación de datos para ingresar
if (isset($_POST['texto'])) {
    $texto = $_POST['texto'];

    $sql = "INSERT INTO todoTable(texto, completado)
                        VALUES('$texto', false)";

    if ($conexion->query($sql) === true) {
        //echo '<div><form action=""><input type="checkbox">'.$texto.'</form></div>';
    } else {
        die("Error al insertar datos: " . $conexion->error);
    }
}
//Obtención de datos de tabla
$sql = "SELECT * FROM todoTable";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        ?>
        <div>
            <form method="POST" id="form<?php echo $row['id']; ?>" action="">
                <input name ="completar" value="<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>" type="checkbox" onchange="completarPendiente(this)"><?php echo $row['texto']; ?>
            </form>
        </div>
        <?php

    }
}

$conexion->close();

?>
</div>
    </div>
    <div>
        <?php
$sql = "SELECT * FROM todoTable";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        ?>
        <div>
            <form method="POST" id="form<?php echo $row['id']; ?>" action="">
                <input name="completar" value="<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>" type="checkbox"
                    onchange="completarPendiente(this)"><?php echo $row['texto']; ?>
            </form>
        </div>
        <?php

    }
}

$conexion->close();

?>
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
</body>

</html>