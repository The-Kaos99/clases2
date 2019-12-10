<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php if (!isset($_REQUEST["insertar"])): ?>
        <h2>Subida de ficheros</h2>
        <h3>Insertar nueva noticia</h3>
        <form action="" method="POST" enctype="multipart/form-data">
        <label for="titulo">Titulo:*</label>
        <input type="text" name="titulo" id="titulo" require><br>
        <label for="texto">Texto:*</label>
        <textarea name="texto" id="texto" cols="30" rows="10"></textarea>
        <label for="categoria">Categoria</label><br>
        <select name="categoria" id="categoria">
            <option value="promociones">promociones</option>
            <option value="otras">otras</option>
        </select><br>
        <label for="imagen">Imagen</label>
        <input type="file" name="imagen" id="imagen"><br>
        <input type="submit" name="insertar" id="insertar" value="Insertar notecia">
    </form>
    <p>NOTA: los datos marcados con (*) deben ser rellenados obligatoriamente</p>
    <?php endif; ?>

    <?php if (isset($_REQUEST["insertar"])): ?>
        <h2>Subida de ficheros. Resultado del formularios</h2>
        <h3>Resultado de la insercion de nueva notecia</h3>
        <?php
        $error="";
        
        if (isset($_REQUEST["titulo"])) {
            if (empty($_REQUEST["titulo"])) {
                $error .="<li>Se require el titulo de la notecia</li>";
            } else {
                $titulo=$_REQUEST["titulo"];
                
            } 
        } else {
            exit("El elemento titulo no existe");
        }
        if (isset($_REQUEST["texto"])) {
            if (empty($_REQUEST["texto"])) {
                $error .="<li>Se require el texto de la notecia</li>";
            } else {
                $texto=$_REQUEST["texto"];
                
            } 
        } else {
            exit("El elemento texto no existe");
        }

        if (isset($_REQUEST["categoria"])) {
            $categoria=$_REQUEST["categoria"];
        } else {
            exit("El elemento categorias no existe");
        }

        if (is_uploaded_file($_FILES["imagen"]["tmp_name"])) {
            $nombreDirectorio= "img/";
            $nombreFichero= $_FILES["imagen"]["name"];
            if (is_dir($nombreDirectorio)) {
                $nombreCompleto= $nombreDirectorio.time()."-".$nombreFichero;
                move_uploaded_file($_FILES["imagen"]["tmp_name"],$nombreCompleto);
            }
            
        
        } else {
            $nombreFichero="No hay imagen";
        }
        
        
    ?>

        <?php if($error!=""): ?>
        <p>No se ha podido realizar la inserción debido a los siguientes errores</p>
        <ul>
            <?php echo $error?>
        </ul>
        <p>[ <a href="ejercicio4.php">Volver</a> ]</p>
        <?php endif;?>

        <?php if($error==""): ?>
        <p>La noticia ha sido recibida correctamente</p>
            <ul>
                <li>Titulo: <?php echo $titulo?></li>
                <li>Texto: <?php echo $texto?></li>
                <li>Categoria: <?php echo $categoria?></li>
                <?php if($nombreFichero!="No hay imagen"): ?>
                    <li>Imagen: <?php echo "<a href=".$nombreCompleto.">".$nombreFichero."</a>"?></li>
                <?php endif;?>
                <?php if($nombreFichero=="No hay imagen"): ?>
                    <li>Imagen: <?php echo $nombreFichero?></li>
                <?php endif;?>
                
            </ul>
            <p>[ <a href="ejercicio4.php">Insertar otra noticia</a> ]</p>
        <?php endif;?>

    <?php endif; ?>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>