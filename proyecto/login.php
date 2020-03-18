<!doctype html>
<html lang="es">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/estilos.css">

</head>

<body class="minh-100">

    <?php require_once "cabecera.php";?>

    <div class="container">
        <div class="row justify-content-center align-items-center shadow-lg pt-3">
            <div class="col-md-4 bg-gradient-success border border-primary shadow-lg ">
                <picture class="hoverable">
                    <source sizes="100vw" type="image/webp" srcset=" imagenes/usuario-lg_1x.webp 1440w, 
                        imagenes/usuario-md_1x.webp 900w,
                        imagenes/usuario-sm_1x.webp 600w">
                    <img class="d-block w-100 p-1" src="imagenes/usuario.png" alt="Cuarto elemento">
                </picture>
                <form action="/action_page.php">
                    <div class="form-group text-center">
                        <label for="email">Usuario:</label>
                        <input type="text" class="form-control text-center" placeholder="Introduce Usuario"
                            id="usuario">
                    </div>
                    <div class="form-group text-center ">
                        <label for="pwd">Contraseña:</label>
                        <input type="password" class="form-control text-center" placeholder="Introduce Contraseña"
                            id="pwd">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-outline-dark">Entrar</button>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"> Recuerdame
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>

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