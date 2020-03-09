<!doctype html>
<html lang="es">

<head>
    <title>Repo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
        <div class="col-2"></div>
            <div class="col-8">
                <!-- Default form login -->
                <form class="text-center border border-light p-5" action="" method="POST">

                    <p class="h4 mb-4">Iniciar</p>
                    <!-- Email -->
                    <input type="text" name="user" class="form-control mb-4" placeholder="Usuario">
                    <!-- Password -->
                    <input type="password" name="password" class="form-control mb-4"
                        placeholder="Contraseña">
                    <!-- Sign in button -->
                    <button class="btn btn-info btn-block my-4" type="submit" name="enviar">Iniciar Sesion</button>
                    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                        Para acceder como administrdor utiliza admin:admin
                    </small>

                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <?php
require_once("bd.php");
session_start();
if (isset($_REQUEST["enviar"])) {
    if (isset($_REQUEST["user"])) {
        if (isset($_REQUEST["password"])) {
            $username=mysqli_real_escape_string($enlace, $_REQUEST["user"]);
            $password=mysqli_real_escape_string($enlace, $_REQUEST["password"]);
            $password=md5($password);
            $sql = "SELECT  * FROM usuarios where username='$username' AND password='$password'";
            $result = mysqli_query($enlace, $sql);
            while ($row = mysqli_fetch_array($result)) {
            /*Imprimir campo por indice*/
                $usuario2 = $row[0];
                if ($username==$usuario2) {
                    $_SESSION["user"]=$username;                   
                    header("Location: index.php");
                }
            }           
        }

    }
}
mysqli_close($enlace);
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