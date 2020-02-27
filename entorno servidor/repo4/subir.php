
            <form action="" method="POST" enctype="multipart/form-data">
                <label for="exampleInputEmail1">Subida de ficheros</label>
                <div class="form-group">
                    <input type="file" name="fichero" id="fichero" class="">
                </div>
                <div class="form-group">
                    <textarea name="descripcion" id="descripcion" cols="30" rows="5" class="form-control" placeholder="descripcion"></textarea>
                    <small name="emailHelp" class="form-text text-muted">Descripcion del archivo</small>
                </div>
                <button type="submit" class="btn btn-primary" name="enviar">Subir</button>
            </form>
            <?php
            require_once "bd.php";
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}

if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];

if (isset($_REQUEST["enviar"])) {
    $archivo = is_uploaded_file($_FILES['fichero']['tmp_name']);
    if (is_uploaded_file($_FILES['fichero']['tmp_name'])) {
        $archivo = mime_content_type($_FILES['fichero']['tmp_name']);
        if (preg_match("/^text\/plain/", $archivo) || preg_match("/^image/", $archivo) || preg_match("/^application\/pdf/", $archivo) ||
            preg_match("/^application\/vnd.oasis.opendocument.text/", $archivo) || preg_match("/^application\/msword/", $archivo)) {
                $user = $_SESSION["user"];
            $directorio = "./$user/";
            if (is_dir($directorio)) { // es un directorio existente
                $idUnico = time();
                $nombreFichero = $idUnico . "-" . $_FILES['fichero']['name'];
                $nombreCompleto = $directorio . $nombreFichero;
                move_uploaded_file($_FILES['fichero']['tmp_name'], $nombreCompleto);                
                $descripcion = mysqli_real_escape_string($enlace, $_REQUEST["descripcion"]);
                if (mysqli_query($enlace, "INSERT into ficheros (propietario,nombre,tipo,descripcion ) VALUES ('$user','$nombreFichero','$archivo','$descripcion')")) {
                    print("<h5 class=\"text-success text-center\">Fichero subido con el nombre: $nombreFichero</h5>");
                }
            }
        }

    } else {
        print("<h2 class=\"danger text-danger text-center\" >Hubo un error </h2>");
    }
}
}
mysqli_close($enlace);
?>