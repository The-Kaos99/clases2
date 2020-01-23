
function validar() {

  nombre = document.getElementById("nombre").value;
  apellido = document.getElementById("apellido").value;
  edad = document.getElementById("edad").value;
  nif = document.getElementById("nif").value;
  email = document.getElementById("email").value;
  provincia = document.getElementById("provincia").value;
  nacimiento = document.getElementById("nacimiento").value;
  telefono = document.getElementById("telefono").value;
  hora = document.getElementById("hora").value;

  if (nombre == null || nombre.length == 0 || tiene_numeros(nombre) != 0) {
    alert("El nombre no puede ser vacío o tener numeros");
    document.getElementById("nombre").focus();
    return false;
  }

  if (apellido == null || apellido.length == 0 || tiene_numeros(apellido) != 0) {
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
      return false;
    }
  }

  if (nifValido(nif) == false) {
    alert("Hay un problema con el NIF");
    document.getElementById("nif").focus();
    return false;
  }


  if (emailValido(email) == false) {
    alert("Hay un problema con el correo");
    document.getElementById("email").focus();
    return false;
  }
  if (provincia == 0) {
    alert("Hay un problema con la provincia");
    document.getElementById("provincia").focus();
    return false;
  }
  if (validar_formato_fecha(nacimiento) == false) {
    alert("Hay un problema con la Fecha de Nacimiento");
    document.getElementById("nacimiento").focus();
    return false;
  }
  if (validar_Telefono(telefono) == false) {
    alert("Hay un problema con el telefono");
    document.getElementById("telefono").focus();
    return false;
  }
  if (valida_hora(hora) == false) {
    alert("Hay un problema con la hora");
    document.getElementById("hora").focus();
    return false;
  }
  return true;
}

function mayus(e) {//funcion para convertir a mayusculas
  e.value = e.value.toUpperCase();
}
function emailValido(email) { //funcion para el email
  return /^((?!\.)[\w-_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])$/gm.test(email);
}
function nifValido(nif) {//funcion para el NIF sin calcular la letra 
  return /(^[0-9]{8})([-]?)([A-Z]{1})$/g.test(nif);
}
function validar_Telefono(telefono) {// Numero de telefono de 9 digitos 
  return /^[76]{1}[0-9]{8}$/g.test(telefono);
}
function validar_formato_fecha(fecha) {//formato fecha corecto
  return /(^0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-](\d{4}$)/g.test(fecha);
}
function valida_hora(hora) {//formato de hora 24h
  return /^([0-1]{1}\d{1}:[0-5]{1}\d{1})$|^([2]{1}[0-3]{1}:[0-5]{1}\d{1})$/g.test(hora);
}
function tiene_numeros(texto) {//saber si hay numeros en una cadena 
  var numeros = "0123456789";
  for (i = 0; i < texto.length; i++) {
    if (numeros.indexOf(texto.charAt(i), 0) != -1) {
      return 1;
    }
  }
  return 0;
}