function validar() {
    if (document.getElementById("nombre").value != "" && document.getElementById("apellidos").value != ""
        && document.getElementById("apellidos").value != "" && document.getElementById("codigo").value != ""
        && document.getElementById("usuario").value != "" && document.getElementById("clave").value != "") {
        // Comprobamos que todos los datos existan
        // Sacamos los valores 
        usuarioAdmin = document.getElementById("usuario").value;
        claveAdmin = document.getElementById("clave").value;

        // Usuario y contraseña
        userAdmin = "Admin";
        ClaveDefinida = "todopoderoso";

        
        // Comprobamos si no coincide la clave
        if (usuarioAdmin != userAdmin) {//compruebo el usuario y si no es lo muestro          
            alert("No eres el administrador");
        } else if (claveAdmin != ClaveDefinida) {//compruebo contraseña y si no es lo muestro
            alert("Contraseña Incorrecta")
        } else {
            document.getElementById("btnCambiar").style.display = "block";
        }
    } else {
        alert("Rellena todos los campos");
    }
}
function cerrar() {
    document.getElementById("btnCambiar").style.display = "none";
    document.getElementById("usuario").value = "";
    document.getElementById("clave").value = "";
    document.getElementById("nombre").value = "";
    document.getElementById("apellidos").value = "";
    document.getElementById("codigo").value = "";
}
function cambiarIdioma() {
    // Declaramos los idiomas.
    var espNombre = "Nombre";
    var espApellidos = "Apellidos";
    var espCodigoVeri = "Código Verificación";
    var engNombre = "Name";
    var engApellidos = "Surname";
    var engCodigoVeri = "Code Verification";

    var espUsuario = "Administrador";
    var engUsuario = "Administrator";
    var espClaveAcceso = "Contraseña";
    var engClaveAcceso = "Password";

    var espCambiar = "Change to Spanish";
    var engCambiar = "Cambiar a ingles";

    /* nos treamos todos los formularios y como hemos creado 3 
    y en u orden especifico pues se dondesta en el array */
    var formulario1 = document.getElementsByTagName("form")[0];
    var formulario2 = document.getElementsByTagName("form")[1];
    var formulario3 = document.getElementsByTagName("form")[2];

    // Sacamos los hijos de los formularios
    //Aqui del formulario 1
    var hijo1 = formulario1.childNodes[1];
    var hijo2 = formulario1.childNodes[7];
    var hijo3 = formulario1.childNodes[13];
    //Aqui del formulario 3
    var  hijo4 = formulario2.childNodes[1];
    var hijo5 = formulario2.childNodes[7];
    //Aqui del formulario 3
    var primerButon = formulario3.childNodes[1];

    /* Comprobamos si esta en español y pasamos el botón a "Cambiar a ingles"
    En caso contrario, pasamos a ingles y el botón a "Change to Spanish"*/
    if (hijo1.innerHTML == espNombre) {
        hijo1.innerHTML = engNombre;
        hijo2.innerHTML = engApellidos;
        hijo3.innerHTML = engCodigoVeri;
        hijo4.innerHTML = engUsuario;
        hijo5.innerHTML = engClaveAcceso;
        primerButon.value = espCambiar;

    } else {
        hijo1.innerHTML = espNombre;
        hijo2.innerHTML = espApellidos;
        hijo3.innerHTML = espCodigoVeri;
        hijo4.innerHTML = espUsuario;
        hijo5.innerHTML = espClaveAcceso;
        primerButon.value = engCambiar;
    }
}
