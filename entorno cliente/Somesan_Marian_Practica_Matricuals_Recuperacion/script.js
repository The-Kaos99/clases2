var total = 0;
var parejast = 0, triost = 0, pokert = 0;
function calcular() {
    var parejas = 0, trios = 0, poker = 0;
    var tipo = 0;
    var num = parseInt(document.getElementById("numero").value, 10);
    if (!isNaN(num) && num != "") {
        var auxiliar = String(num);
        var num_array = Array.from(auxiliar);
        if (num_array.length <= 4) {
            for (var index = 0; index < num_array.length; index++) {
                var indices = [];
                var element = num_array[index];
                var idx = num_array.indexOf(element);
                while (idx != -1) {
                    indices.push(idx);
                    idx = num_array.indexOf(element, idx + 1);
                }
                if (indices.length == 2) {
                    tipo = indices.length;
                } else
                    if (indices.length == 3) {
                        tipo = indices.length;
                    } else
                        if (indices.length == 4) {
                            tipo = indices.length;
                        }
            }
            switch (tipo) {
                case 2:
                    total++;
                    parejas++;
                    parejast++;
                    break;
                case 3:
                    total++;
                    trios++;
                    triost++;
                    break;
                case 4:
                    total++;
                    poker++;
                    pokert++;
                    break;

                default:
                    break;
            }
            vetana(total, parejas, trios, poker, parejast, triost, pokert);

        } else {
            alert('Has metido mas de 4 numeros');
            return false;
        }

    } else {
        alert('Lo has dejado en blanco o has metido lertras ');
        return false;
    }
}

function vetana(total, parejas, trios, poker, tparejas, ttrios, tpoker) {
    var ventana = window.open("", "", "width=300 height=300");
    var fondo = "#3EDD2E";
    ventana.document.write("<h1>Hola es un titulo</h1>");
    ventana.document.write("<p>Parejas : " + parejas + "</p>");
    ventana.document.write("<p>Trios : " + trios + "</p>");
    ventana.document.write("<p>Poker : " + poker + "</p>");
    ventana.document.write("<p>Total figuras : " + total + "</p>");
    ventana.document.write("<p>Parejas totales : " + tparejas + "</p>");
    ventana.document.write("<p>Trios totales : " + ttrios + "</p>");
    ventana.document.write("<p>Poker totales : " + tpoker + "</p>");
    ventana.document.write("");
    ventana.document.write(" <script src=\"./script.js\"></script>");
    ventana.document.bgColor = fondo;
    ventana.setTimeout(close, 10000);
}
var contador = 1;
function calcularletras() {
    var letras = ["B", "C", "D", "F", "G", "J", "K", "L", "M", "N", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
    var combinaciones = [];
    var letrasactuales = document.getElementById("letrasactuales").value.toUpperCase();
    var letrasqueridas = document.getElementById("letrasqueridas").value.toUpperCase();
    for (let index = 0; index < letras.length; index++) {
        for (let index2 = 0; index2 < letras.length; index2++) {
            for (let index3 = 0; index3 < letras.length; index3++) {
                var matricula = letras[index] + letras[index2] + letras[index3];
                combinaciones[contador] = matricula;
                contador++;
            }

        }
    }

    var actuales = combinaciones.indexOf(letrasactuales);
    var queridas = combinaciones.indexOf(letrasqueridas) + 1;
    var combi = combinaciones.length;     
    var operacion = queridas-actuales ;
    var newt = document.createElement("div");
    newt.setAttribute("class", "col-12 text-info");
    var texto = " Entonces el total de combinaciones de letras que tienes que esperar es de alrededor de : ";
    var t = document.createTextNode("Hay un total  de " + combi + " posiblmes combinaciones tu estas en la combinacion: " + actuales + " y quieres llegar a " + queridas + texto + operacion);
    newt.appendChild(t);
    document.getElementById("prueba").appendChild(newt);
    final = 0, contador = 1, opauxiliar = 0, opauxiliar2 = 0, actuales = 0;
    combinaciones = [];
    letras = [];
} 
