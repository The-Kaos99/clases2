
function validar() {
  nombre = document.getElementById("nombre").value;
  apellido = document.getElementById("apellido").value;
  edad = document.getElementById("edad").value;
  nif = document.getElementById("nif").value;
  email.document.getElementById("email").value;
  regex = /(^[0-9]{8})([-]?)([A-Z]{1})$/g;
  if (nombre == null || nombre.length == 0 || tiene_numeros(nombre) != 0) {
    alert("El nombre no puede ser vacío o tener numeros");
    document.getElementById("nombre").focus();
    return false;
  }
  if (apellido == null || apellido.length == 0 || tiene_numeros(nombre) != 0) {
    alert("El apellido no puede ser vacío");
    document.getElementById("apellido").focus();
    return false;
  }
  if (isNaN(edad)) {
    alert("La edad no puede ser letras");
    document.getElementById("edad").focus();
  } else {
    if (edad >= 0 && edad <= 105) {

    } else {
      alert("La edad no puede ser menor de 0 ni mayor de 105 años");
      document.getElementById("edad").focus();
    }
  }
  if( !(/^\d{8}[A-Z]$/.test(nif)) ){ 
    alert("NIF en mal estado");
    return false; 
  }
  if (regex!=nif) {    
    alert("NIF invalido"); 
    alert("Hay un problema con el NIF");
    document.getElementById("nif").focus();
  }
  if (emailValido(email) == flase) {
    alert("Hay un problema con el correo ");
    document.getElementById("email").focus();
  }
 
return true;
}

function mayus(e) {//funcion para convertir a mayusculas
  e.value = e.value.toUpperCase();
}
function emailValido(mail) {
  return /^\w+([\.\+\-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(mail);
}
function nifValido(nif) {
  return /(^[0-9]{8})([-]?)([A-Z]{1})$/g.test(nif);
}

function tiene_numeros(texto) {
  var numeros = "0123456789";
  for (i = 0; i < texto.length; i++) {
    if (numeros.indexOf(texto.charAt(i), 0) != -1) {
      return 1;
    }
  }
  return 0;
}