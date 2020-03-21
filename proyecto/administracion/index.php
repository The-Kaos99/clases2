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
            <div class="col-md-4">
                <script type="text/javascript">
                    function generar(longitud)
                    {
                      long =8;
                      var caracteres = "abcdefghijkmnpqrtuvwxyzABCDEFGHIJKLMNPQRTUVWXYZ2346789";
                      var contraseña = "";
                      for (i=0; i<long; i++) contraseña += caracteres.charAt(Math.floor(Math.random()*caracteres.length));
                      document.getElementById("pass").innerHTML=contraseña;
                    }
                </script>
                    
                    <form id="Form" name="aleatorio" method="post" action="JavaScript:generar(document.aleatorio.long.value)" >
                    <input name="long" type="hidden" id="texto" autocomplete="off" placeholder="Longitud de la contraseña" >
                    <button type="submit" >Generar</button>
                    </form>
                    <p id="pass"></p>
            </div>
            <div class="col-md-4">
            <?php require"crear_profes.php";?>
            </div>
        </div>
        
    </div>
      
    <?php require_once "../footer.php";?>
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