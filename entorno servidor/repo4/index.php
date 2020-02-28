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
<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
?>

<body>
  <header class="container-fluid bg-dark">
    <div class="row">
      <div class="col-1 pt-3">
        <a href="logout.php">Salir</a>
      </div>
      <div class="col-11">
        <h1 class="text-center text-info">Panel de Control</h1>
      </div>

    </div>

  </header>


  <div class="container">
    <div class="row">
      <div class="col-3">
        <?php 
        if (isset($_SESSION["user"])) {
            $user = $_SESSION["user"];

            if ($user == "admin") {
               include_once "listausuarios.php";
            }else{
              include_once "subir.php";
            }
          }
        ?>
      </div>
      <div class="col-3"></div>
      <div class="col-6">
        <?php 
        if (isset($_SESSION["user"])) {
            $user = $_SESSION["user"];

            if ($user == "admin") {
               include_once "registro.php";
            }else{
              include_once "listadoarchivos.php";
            }
          }
        ?>
      </div>

    </div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
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