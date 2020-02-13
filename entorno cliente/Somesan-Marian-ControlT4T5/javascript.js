
function ventana1() {
    var ventana1 = window.open("", "", "width=300 height=300");
    var fondo = "#3EDD2E";

    ventana1.document.write("<form method=\"post\">");
    ventana1.document.write("<p>Nombre</p>");
    ventana1.document.write("<input type=\"text\" name=\"\" id=\"nombre\">");
    ventana1.document.write("<p>Contraseña</p>");
    ventana1.document.write("<input type=\"text\" name=\"\" id=\"pass1\">");
    ventana1.document.write("<p>repite</p>");
    ventana1.document.write("<input type=\"text\" name=\"\" id=\"pass2\">");
    ventana1.document.write("<input type=\"button\" value=\"Enviame\" onclick=\"eje2()\">");
    ventana1.document.write("</form>");
    ventana1.document.write(" <script src=\"./javascript.js\"></script>");
    ventana1.document.bgColor = fondo;
}
function eje2() {
    document.write("pass1");
    document.getElementById("nombre").value();
    document.getElementById("pass1").value();
    document.getElementById("pass2").value();
    document.write("pass1");
    
}
function formulario1() {
    ventana1.window.close();
}
function ventana2() {
    var ventana2 = window.open("", "", "width=300 height=300 left=1024");
    var fondo = "#2EDDDA";
    ventana2.document.write("Hola");
    ventana2.document.write("<form  method=\"post\">");
    ventana2.document.write("<p>Numero</p>");
    ventana2.document.write("<input type=\"text\" name=\"\" id=\"numero\">");
    ventana2.document.write("<input type=\"button\" value=\"contar\" onclick=\"formulario1()\">");
    ventana2.document.write("</form>");

    ventana2.document.bgColor = fondo;

}
function contar(numero) {
    for (let index = numero; index == 0; index--) {
        document.write("index")

    }
}
function ventana3() {
    var ventana3 = window.open("", "", "width=300 height=300 left=512 top=350");
    var fondo = "#CD2EDD";
    ventana3.document.bgColor = fondo;
}
function cerra1() {
    ventana1.window.close();
}
function iguales(a, b) {
    if (a == b) {
        return true;
    } else {
        return false;
    }
}
function contraseña(pass) {
    if (!(/[0-9]?[A-Z]?/g).test(pass)) {

    }
}