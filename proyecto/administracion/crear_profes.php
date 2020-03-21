<div class="row ">
    <div class="col-12">
        <h3>Crear Profesores</h3>
    </div>
</div>
<div class="row pb-5">
    <div class="col-12">
        <form action="" method="post">
            <div class="form-group">
                <label for="nombre">Nombre del Profesor</label>
                <input type="text" class="form-control" name="nombre" id="nombre"
                    aria-describedby="nombre" placeholder="Nombre del Profesor">
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos del Profesor</label>
                <input type="text" class="form-control" name="apellidos" id="apellidos"
                    aria-describedby="apellidos" placeholder="Apellidos del Profesor">
            </div>
            <div class="form-group">
                <label for="email">Correo electronico</label>
                <input type="email" class="form-control" name="email" id="email"
                    aria-describedby="email" placeholder="email">
            </div>
            <div class="form-group">
                <label for="contra">Contraseña :<br> Sera enviada por correo </label>
                <input type="hidden" class="form-control" name="Password" id="Password">
            </div>
            <!--<button class="btn btn-success" type="submit" name="borrar" onclick="generar(8)" name="enviar">Crear Profesor</button>-->
            <button type="submit" class="btn btn-success" name="enviar"  onclick="generar(8)" >Crear Profesor</button>
        </form>
    </div>
</div>
<script type="text/javascript">
    function generar(longitud){
      long =8;
      var caracteres = "abcdefghijkmnpqrtuvwxyzABCDEFGHIJKLMNPQRTUVWXYZ2346789";
      var contraseña = "";
      for (i=0; i<long; i++) contraseña += caracteres.charAt(Math.floor(Math.random()*caracteres.length));
      //alert(contraseña);
      document.getElementById("Password").innerHTML=contraseña;
    }
</script>
<?php
require "../bd.php";

if (isset($_REQUEST["enviar"]) && isset($_REQUEST["nombre"]) && isset($_REQUEST["apellidos"]) && isset($_REQUEST["email"])) {
    
    $hoy = 5;
    mysqli_query($enlace, "INSERT into prueba (hola) VALUES ('$hoy')");
    if ($_REQUEST["nombre"] != "") {
       // $contra //= mysqli_real_escape_string($enlace, 'hola');
        $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $contra = "";
        //Reconstruimos la contraseña segun la longitud que se quiera
        for ($i = 0; $i < 8; $i++) {
            //obtenemos un caracter aleatorio escogido de la cadena de caracteres
            $contra .= substr($str, rand(0, 62), 1);
        }
        print($contra);
        $contra2=$contra;
        $contra = md5($contra);
        $username = mysqli_real_escape_string($enlace, $_REQUEST["nombre"]);
        $apellidos = mysqli_real_escape_string($enlace, $_REQUEST["apellidos"]);
        $email = mysqli_real_escape_string($enlace, $_REQUEST["email"]);
        if (mysqli_query($enlace, "INSERT INTO `profesores`(`nombre`, `apellidos`, `email`, `pass`) VALUES ('$username','$apellidos','$email','$contra')")) {
            printf("<h2 class=\" pb-3 text-success\">Usuario creado corectament</h2>");
            /*  $archivoActual = $_SERVER['PHP_SELF'];
            header("refresh:0;url=" . $archivoActual);*/
            require "../correo/enviar.php";
            enviar_correo($email, $contra2);
        } else {
            print("<h2 class=\" pb-3 text-danger\">Hubo un error con los datos proporcionados </h2>");
        }
    } else {
        print("<h2 class=\" pb-3 text-danger\">Hubo un error con los datos proporcionados , asegurate de no tener caracteres especiales en el nombre de usuario</h2>");
    }

}
?>