<div class="row ">
    <div class="col-12">
        <h3>Crear profesores</h3>
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
                <input type="hidden" class="form-control" >
            </div>
            <button class="btn btn-success" type="submit" name="borrar" onclick="generar(8)">Crear Profesor</button>
        </form>
    </div>
</div>
<script type="text/javascript">
    function generar(longitud){
      long =8;
      var caracteres = "abcdefghijkmnpqrtuvwxyzABCDEFGHIJKLMNPQRTUVWXYZ2346789";
      var contraseña = "";
      for (i=0; i<long; i++) contraseña += caracteres.charAt(Math.floor(Math.random()*caracteres.length));
      alert(contraseña);
      document.getElementById("pass").innerHTML=contraseña;
    }
</script>
<?php 
require "bd.php";

?>