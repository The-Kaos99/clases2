<?php

require "bd.php";

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
    $directorio='./'.$user.'/';
    $sql = "SELECT  * FROM ficheros where propietario='$user' order by 'id' ";
    $result = mysqli_query($enlace, $sql);
    while ($row = mysqli_fetch_array($result)) {   
        print("<h5 class=\"pt-3\">$row[1] </h5>");
        print("<p>Descripcion : $row[3] </p>");
        //$fichero=$directorio.$row[1];
        ?>         
            <form action="" method="post">
                <input type="hidden" name="fichero" value="<?php  print($row[1]);?>">
                <button class="btn btn-secondary" type="submit" name="borrar">Borrar</button>
                <input type="hidden" name="id" value="<?php  print($row[4]);?>">
            </form>
        <?php
    }
}
if (isset($_REQUEST["borrar"])) {
    $user = $_SESSION["user"];
    $directorio='./'.$user.'/';
    $fichero=$_REQUEST["fichero"];
    $id=$_REQUEST["id"];
    $fichero=$directorio.$fichero;
    $sql = "DELETE FROM ficheros where id='$id' ";
    mysqli_query($enlace, $sql);
    unlink($fichero);
    $archivoActual = $_SERVER['PHP_SELF'];
    header("refresh:0;url=" . $archivoActual);

}
?>