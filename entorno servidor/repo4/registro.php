<h2>Alta usuarios</h2>
<form action="" method ="POST">
  <div class="form-group" >
    <label for="exampleInputEmail1">Nombre de usuario</label>
    <input type="text" class="form-control" name="nombreusuario" placeholder="usuario">
    <small name="emailHelp" class="form-text text-muted">Nombre de usuario</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" name="Password" placeholder="Contraseña">
  </div>
  <button type="submit" class="btn btn-primary" name="enviar" >Añadir</button>
</form>

<?php
require("bd.php");
if (isset($_REQUEST["enviar"])) {

    if (isset($_REQUEST["nombreusuario"])) {
        printf("Fallo de conexion : ");
        if (isset($_REQUEST["Password"])) {
            $contra = mysqli_real_escape_string($enlace, md5($_REQUEST["Password"]));
            $username = mysqli_real_escape_string($enlace, $_REQUEST["nombreusuario"]);
            if (mysqli_query($enlace, "INSERT into usuarios (username,nombre,password ) VALUES ('$username','','$contra')")) {
                printf("%d fila insertada.\n", mysqli_affected_rows($enlace));
            }
        }

    }
}
mysqli_close($enlace);
?>