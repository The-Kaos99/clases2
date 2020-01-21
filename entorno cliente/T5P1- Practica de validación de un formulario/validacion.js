
function validar() {            
  nombre = document.getElementById("nombre").value;
  apellido=document.getElementById("apellido").value;
  edad=document.getElementById("edad").value;
  nif=document.getElementById("nif");
  patronnif="[0-9]{8}[A-Z]";
  if( nombre == null || nombre.length == 0 ){
    alert("El nombre no puede ser vacío");  
    document.getElementById("nombre").focus();
    return false;
  }
  if( apellido == null || apellido.length == 0 ){
    alert("El apellido no puede ser vacío");  
    document.getElementById("apellido").focus();
    return false;
  }
  if (isNaN(edad)) {
    alert("La edad no puede ser letras");
    document.getElementById("edad").focus();
  }else{
    if (edad>=0 && edad<=106) {
     
    }else{
      alert("La edad no puede ser menor de 0 ni mayor de 105 años");
      document.getElementById("edad").focus();
    }
  }
  if (condition) {
    
  }
  return true;
}