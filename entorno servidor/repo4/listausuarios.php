<?php

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];

    if ($user == "admin") {
        print("<h2 class=\" pb-3\">Lista de usuarios </h2>");
        require_once "bd.php";

        $prueba = "SELECT COUNT(username) FROM usuarios ";
        $result2 = mysqli_query($enlace, $prueba);
       // $sql = "SELECT  * FROM usuarios LIMIT 1,$limite";
        while ($row = mysqli_fetch_array($result2)) {
            $limite = $row[0];
        }
        $sql = "SELECT  * FROM usuarios where username!='admin'";
        $result = mysqli_query($enlace, $sql);
        while ($row = mysqli_fetch_array($result)) {
            /*Imprimir campo por indice*/
            $usuario2 = $row[0];
            print("<h5 >$row[0] </h5>");
            ?>
           
            <form action="" method="post">
                <input type="hidden" name="username" value="<?php  print($row[0]);?>">
               <button class="btn btn-secondary" type="submit" name="borrar">Borrar</button>
            </form>
            <?php
        }
        function rmDir_rf($carpeta){
            foreach(glob($carpeta . "/*") as $archivos_carpeta){             
                if (is_dir($archivos_carpeta)){
                rmDir_rf($archivos_carpeta);
                } else {
                    unlink($archivos_carpeta);
                }
            }
             rmdir($carpeta);
        }
        if (isset($_REQUEST["borrar"])) {
            $username=$_REQUEST["username"];
            $sql = "DELETE FROM usuarios WHERE username='$username'";
            $sql2="DELETE FROM ficheros WHERE propietario='$username'";
            $result = mysqli_query($enlace, $sql);
            $result2 = mysqli_query($enlace, $sql2);
            $carpeta='./'.$username;
            rmDir_rf($carpeta);
            $archivoActual = $_SERVER['PHP_SELF'];
            header("refresh:0;url=" . $archivoActual);
        }
        

        mysqli_close($enlace);
    }
}
?>