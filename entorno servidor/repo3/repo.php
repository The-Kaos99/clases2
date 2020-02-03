<!doctype html>
<html lang="es">

<head>
  <title>Repositorio</title>
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
        <h1 class="text-info text-center">Repositorio</h1>
      </div>
    </div>

  </header>
  <div class="container">
    <div class="row">
      <div class="col-12 pt-5 pb-5">
        <form action="repo.php" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-4"><input type="file" name="fichero" id="fichero" class="btn btn-warning text-info"></div>
            <div class="col-2 pl-5"><button name="enviar" type="submit" class="btn btn-primary">Enviar</button></div>
            <div class="col-6">
            <?php
if (isset($_COOKIE['operacion'])){
  $galleta=$_COOKIE['operacion'];
  print("<h4>$galleta</h4>");
}
?>
            </div>
          </div>
          <div class="row">
            <div class="col-6"><a href="img/" class="text-white bg-dark ">Imagenes</a></div>
            <div class="col-6"> <a href="doc/" class="text-white bg-dark">Documentos</a></div>
          </div>            
        </form>
      </div>
    </div>

    <div class="row">
      
      <div class="col-11">
        <?php
if (isset($_REQUEST["enviar"])){
  $archivo=is_uploaded_file($_FILES['fichero']['tmp_name']); 
  if (is_uploaded_file($_FILES['fichero']['tmp_name'])) {
    print( "<h2 class=\"text-success text-center\">Archivo con nombre : ". $_FILES['fichero']['name'] ." subido</h2>");
    //meter esto en un if y con expresiones controlar imagen o texto 
     $archivo2=mime_content_type($_FILES['fichero']['tmp_name']);
     if(preg_match("/^text\/plain/",$archivo2) || preg_match("/^image/",$archivo2) || preg_match("/^application\/pdf/",$archivo2)||
     preg_match("/^application\/vnd.oasis.opendocument.text/",$archivo2) || preg_match("/^application\/msword/",$archivo2)
     ){
        print( "<h2 class=\"text-success text-center\">Archivo con formato correcto</h2>");
        if (preg_match("/^text\/plain/",$archivo2) || preg_match("/^application\/pdf/",$archivo2)||
        preg_match("/^application\/vnd.oasis.opendocument.text/",$archivo2) || preg_match("/^application\/msword/",$archivo2)) {
          $directorio="doc/";
          if (is_dir($directorio)){ // es un directorio existente
            $idUnico = time();
            $nombreFichero = $idUnico."-". $_FILES['fichero']['name'];
            $nombreCompleto = $directorio.$nombreFichero;
            move_uploaded_file ($_FILES['fichero']['tmp_name'],$nombreCompleto);
            print( "<h2 class=\"text-success text-center\">Fichero subido con el nombre: $nombreFichero</h2>");
            print (" <p><a href=\"$nombreCompleto\" class=\"text-primary\">$nombreCompleto</a></p>");
            setcookie("operacion","Fichero subido con el nombre: $nombreFichero",0,"/");
            }
        }
        if (preg_match("/^image/",$archivo2)) {
          $directorio="img/";
          if (is_dir($directorio)){ // es un directorio existente
            $idUnico = time();
            $nombreFichero = $idUnico."-". $_FILES['fichero']['name'];
            $nombreCompleto = $directorio.$nombreFichero;
            move_uploaded_file ($_FILES['fichero']['tmp_name'],$nombreCompleto);
            print( "<h2 class=\"text-success text-center\">Fichero subido con el nombre: $nombreFichero</h2>");
            setcookie("operacion","Fichero subido con el nombre: $nombreFichero",0);
            }
        }
     } else {
        print("<h2 class=\"danger text-danger text-center\" >Hubo un error con el formato del archivo </h2>");
     }
  }else{
    print("<h2 class=\"danger text-danger text-center\" >Hubo un error </h2>");
 } 
}
$imagenes=scandir("img/");
$documentos=scandir("doc/");
$elementosimg=count($imagenes);
$elementosdoc=count($documentos);
for ($i=2; $i < $elementosimg; $i++) { 
  print("
  <div class=\"row p-2 border border-dark\">
        <div class=\"col-6\">
        <p class=\"text-center text-white\" >$imagenes[$i]</p>
        </div>
        <div class=\"col-6\" >
        <form action=\"./borrar.php\" method=\"post\" name=\"formValidado\">
                <div class=\"row \">
                    <div class=\"col-6 pb-2\">
                        <button type=\"submit\" class=\"btn btn-dark \">Eliminar</button>
                        <input type=\"hidden\" name=\"fichero\" id=\"fichero\" value=\"./img/$imagenes[$i]\">
                    </div>
                </div>
            </form>
            <form action=\"./renombrar.php\" method=\"post\" name=\"formValidado\">
                <div class=\"row\">
                    <div class=\"col-6\">                        
                        <input type=\"hidden\" name=\"fichero\" id=\"fichero\" value=\"$imagenes[$i]\">
                        <input type=\"hidden\" name=\"dir\" id=\"fichero\" value=\"./img/\">
                        <input type=\"text\" class=\"form-control\" name=\"nuevoNombre\" placeholder=\"Nuevo Nombre\" id=\"nuevoNombre\">
                    </div>
                    <div class=\"col-6\">
                        <button type=\"submit\" class=\"btn btn-dark\">Renombrar</button>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
  ");
}
for ($i=2; $i < $elementosdoc; $i++) { 
  print("  
  <div class=\"row p-2 border border-dark\">
        <div class=\"col-6\">
        <p class=\"text-center text-white\" >$documentos[$i]</p>
        </div>
        <div class=\"col-6\" >
        <form action=\"borrar.php\" method=\"post\" name=\"formValidado\">
                <div class=\"row \">
                    <div class=\"col-6 pb-2\">
                        <button type=\"submit\" class=\"btn btn-dark \">Eliminar</button>
                        <input type=\"hidden\" name=\"fichero\" id=\"fichero\" value=\"./doc/$documentos[$i]\">
                    </div>
                </div>
            </form>
            <form action=\"./renombrar.php\" method=\"post\" name=\"formValidado\">
                <div class=\"row\">
                    <div class=\"col-6\">
                        <input type=\"hidden\" name=\"fichero\" id=\"fichero\" value=\"$documentos[$i]\">
                        <input type=\"hidden\" name=\"dir\" id=\"fichero\" value=\"./doc/\">
                        <input type=\"text\" class=\"form-control\" name=\"nuevoNombre\" placeholder=\"Nuevo Nombre\" id=\"nuevoNombre\">
                    </div>
                    <div class=\"col-6\">
                        <button type=\"submit\" class=\"btn btn-dark\">Renombrar</button>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
  ");
}
?>



      </div>
      <div class="col-1">
  
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