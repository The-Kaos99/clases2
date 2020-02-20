<form class="text-center border border-light p-5" action="" method="POST">

                    <p class="h4 mb-4">Iniciar</p>
                    <!-- Email -->
                    <input type="text" name="user" class="form-control mb-4" placeholder="Usuario">
                    <!-- Password -->
                    <input type="password" name="password" class="form-control mb-4"
                        placeholder="Contraseña">
                    <!-- Sign in button -->
                    <button class="btn btn-info btn-block my-4" type="submit" name="enviar">Iniciar Sesion</button>


                </form>

<?php
require_once("bd.php");
session_start();
if (isset($_REQUEST["enviar"])) {
    if (isset($_REQUEST["user"])) {
       // printf("Fallo de conexion : ");
        if (isset($_REQUEST["password"])) {
            $username=mysqli_real_escape_string($enlace, $_REQUEST["user"]);
            $password=mysqli_real_escape_string($enlace, md5($_REQUEST["password"]));
            $sql = "SELECT  * FROM usuarios where username='$username' AND password='$password'";
            $result = mysqli_query($enlace, $sql);
            while ($row = mysqli_fetch_array($result)) {
            /*Imprimir campo por indice*/
                $usuario2 = $row[1];
                print($row[0] . "<br>");
                if ($username==$usuario2) {
                    print("Eres el puto admin");

                }
            }           
        }

    }
}
mysqli_close($enlace);
?>


