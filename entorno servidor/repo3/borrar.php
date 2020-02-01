<!doctype html>
<html lang="es">

<head>
    <title>Borrado de archivos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <header class="container-fluid bg-dark">
        <div class="row">
            <div class="col-12">
                <h1 class="text-info text-center">Repositorio - Borrador</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center"><a href="<?=$_SERVER['HTTP_REFERER'] ?>">Volver</a></div>
        </div>
    </header>

    <?php
$fichero = $_REQUEST["fichero"];
if (is_dir ($fichero)) {
    //print("<h2 class=\"text-danger text-center\" >Es un directorio</h2>");
    if (rmdir ($fichero)) {
        print( "<h2 class=\"text-success text-center\">Directorio eliminado correctamente</h2>");
        setcookie("operacion","Se realizo la eliminacion del  directorio $fichero",0,"/");
    }
}else{
if (unlink("$fichero")){
    print( "<h2 class=\"text-success text-center\">Fichero eliminado correctamente</h2>");
    setcookie("operacion","Se realizo el borrado del fichero $fichero",0,"/");
}else{
    print("<h2 class=\"text-danger text-center\" >Hubo un error con el borrado </h2>");
}}
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>