<!doctype html>
<html lang="es">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta name="description" content="Esta es la descripcion para el buscador , listado de busqueda">

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
                <form  action="" method="POST">
                    <div class="form-group text-center">
                        <label for="user">Usuario o Email:</label>                        
                        <input type="text" class="form-control text-center" placeholder="Introduce Usuario o Email"
                            id="user" name="user">
                    </div>
                    <div class="form-group text-center ">
                        <label for="pwd">Contraseña:</label>
                        <input type="password" class="form-control text-center" placeholder="Introduce Contraseña"
                            id="pwd" name="pwd">
                    </div>

                    <div class="text-center">
                        <button type="btn" class="btn btn-primary btn-outline-dark" name="entrar">Entrar</button>
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
<?php 

require_once("bd.php");
session_start();
$admin=false;
$profe=false;
$padre=false;
if (isset($_REQUEST["entrar"])) {
    if (isset($_REQUEST["user"])) {
        if (isset($_REQUEST["pwd"])) {
            $username=mysqli_real_escape_string($enlace, $_REQUEST["user"]);
            $password=mysqli_real_escape_string($enlace, $_REQUEST["pwd"]);
            $password=md5($password);
            $sql = "SELECT  count(username) FROM admins where username='$username' AND password='$password'";
            $result = mysqli_query($enlace, $sql);
            while ($row = mysqli_fetch_array($result)) {
                /*Imprimir campo por indice*/
                printf("Conexion : $row[0]");
              if ($row[0]==1) {
                 $admin=true;
                 //  header("Location: administracion/index.php");
              }              
           }
            $sql2 = "SELECT  count(nombre) FROM profesores where nombre='$username' OR email='$username' AND pass='$password'";
            $result = mysqli_query($enlace, $sql2);
          //  printf($result);
            while ($row = mysqli_fetch_array($result)) {
                /*Imprimir campo por indice*/
                
                if ($row[0]==1) {
                    printf("Conexion : $row[0]");
                   $profe=true;
                  //  header("Location: administracion/index.php");
                }
               
            }
            $sql3 = "SELECT  count(username) FROM padres where username='$username' OR email='$username' AND pass='$password'";
            $result = mysqli_query($enlace, $sql3);
            while ($row = $result) {
                /*Imprimir campo por indice*/
                printf("Conexion : $row[0]");
                if ($row[0]==1) {
                   $padre=true;
                  //  header("Location: administracion/index.php");
                }
               
            }   
            if ($admin) {
                header("Location: administracion/");
            }
            if ($profe) {
                header("Location: profesores/index.php");
            }
            if ($padre) {
                header("Location: padres/index.php");
            }
        }

    }
}
if (isset($enlace)) {
    mysqli_close($enlace);
} 
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