<!doctype html>
<html lang="es">

<head>
    <title>Bienvenidos</title>
    <meta name="description" content="Esta es la descripcion para el buscador , listado de busqueda">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/estilos.css">
</head>

<body class="minh-100">
    <?php require_once "cabecera.php";?>
    <div class="container bg-gradient-light opacidad-10">
        <div class="row">
            <div class="col-md-4">
                <?php require_once "crear_profes.php";?>
            </div>
            <div class="col-md-8">
                <button class="btn btn-primary" onclick="mostrarProfes()">Mostrar Profesores</button>
                <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
                    <table class="table table-condensed mt-4" id="listaProfesores"> </table>
                </div>
                <h1 class="danger">Mirar aqui para la tabla y probar mas <a href="https://mdbootstrap.com/docs/jquery/tables/scroll/">Tablas</a></h1>

            </div>

        </div>

    </div>

    <?php require_once "../footer.php";?>
    <!-- Optional JavaScript -->
    <script src="../js/app.js"></script>
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