var estado = false; //Esta variable nos indica el estado del pincel
var color = "color1";//El color del que queremos pintar en la tabla de dibujo

//Creamos la funcion para crear la tabla
function creartablero(){
	//Obtenemos mediante el DOM el div donde vamos a añadir la tabla de dibujo
	var tablero = document.getElementById("zonadibujo");
	//Creamos la tabla con los atributos necesarios para su funcionamiento 
	var tabla = document.createElement("table");
	tabla.setAttribute("class", "tablerodibujo");
	tabla.setAttribute("border", "1px");
	tabla.setAttribute("onclick","cambiar_estado()")
	var contador = 0;
	for(var i=0;i<30;i++){
		//Creamos el tr de la tabla
		var tr = document.createElement("tr");
		for(var j=0;j<30;j++){
			//Creamos el td de la tabla
			var td = document.createElement("td");
			//Le añadimos los atributos necesarios a la tabla
			td.setAttribute("id",contador)
			td.setAttribute("onmousemove", "pintar("+contador+")")
			//Añadimos el td al tr de la tabla
			tr.appendChild(td);
			contador++;
		}
		//le añadimos el tr a la tabla
		tabla.appendChild(tr)
	}
	//Añadimos la tabla al div
	tablero.appendChild(tabla)
}
//Funcion para cambiar el color
function elegirColor(numColor){
	//Recogemos el nodo que tiene la clase seleccionado
	var quitarSeleccion = document.getElementsByClassName("seleccionado")[0]
	//Le quitamos la clase selecionado
	quitarSeleccion.classList.remove("seleccionado");
	//Ponemos la clase seleccionado al color que hemos pinchado
	var ponerSeleccion = document.getElementsByClassName("color"+numColor)[0];
	ponerSeleccion.className += " seleccionado";
	//cambiamos la clase color
	color = "color"+numColor;
}
//Funcion para cambiar el estado del pincel
function cambiar_estado(){
	//Obtenemos el nodo del pincel
	var pincel = document.getElementById("pincel");
	//Miramos el valor del estado y lo cambiamos
	if(!estado){
		pincel.innerHTML="Puedes pintar";
		estado=true;
	}else{
		pincel.innerHTML="Click en la tabla para pintar";
		estado=false;
	}
}
//Funcion para pintar
function pintar(id){
	//Miramos si puede pintar
	if(estado){
		//En caso afirmativo le añadimos la clase del color que tenemos seleccionado
		document.getElementById(id).setAttribute("class",color);
	}	
}
//funcion para borrar la pizarra
function borrar(){
	var a = document.getElementsByClassName("tablerodibujo")[0];
	var b = a.querySelectorAll("td");
	for (var i = 0; i < b.length; i++) {
		b[i].setAttribute("class","")
	}
}

//Comprobar que la aplicacion funciona en todos los navegadores

