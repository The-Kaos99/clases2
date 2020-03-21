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
require "bd.php";

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];

    if ($user == "admin") {
        if (isset($_REQUEST["enviar"])) {
            if (isset($_REQUEST["nombreusuario"])) {
                //printf("Fallo de conexion : ");
                if (isset($_REQUEST["Password"])) {
                    $cadena="'";
                    $cadena2="\"";
                    $pos = strpos($_REQUEST["nombreusuario"], $cadena);
                    $pos2 = strpos($_REQUEST["nombreusuario"], $cadena2);
                    if ($_REQUEST["Password"] != "" && $_REQUEST["nombreusuario"] != "" && $pos===false && $pos2===false ) {
                        $contra = mysqli_real_escape_string($enlace,$_REQUEST["Password"]);
                        $contra= md5($contra);
                        $username = mysqli_real_escape_string($enlace, $_REQUEST["nombreusuario"]);
                        /*if(!preg_match('/[^a-zA-Z\d]/', $string)){//enviar}  
                        
                        Mirar un patron que no tenga signos y cosas raras y utilizarlo 
                        
                        */
                        if (mysqli_query($enlace, "INSERT into usuarios (username,nombre,password ) VALUES ('$username','','$contra')")) {
                            $estructura = './'.$_REQUEST["nombreusuario"];
                            if (!mkdir($estructura, 0777, true)) {
                                die('Fallo al crear las carpetas...');
                            }
                            /* printf("%d fila insertada.\n", mysqli_affected_rows($enlace));*/
                            printf("<h2 class=\" pb-3 text-success\">Usuario creado corectament</h2>");
                            $archivoActual = $_SERVER['PHP_SELF'];
                            header("refresh:0;url=" . $archivoActual);
                        }
                    }else{
                        print("<h2 class=\" pb-3 text-danger\">Hubo un error con los datos proporcionados , asegurate de no tener caracteres especiales en el nombre de usuario</h2>");
                    }
                }
            }
        }
    }
}
mysqli_close($enlace);
?>