
function calcular() {
    var tipo = 0;
    var num = parseInt(document.getElementById("numero").value, 10);
    if (!isNaN(num) && num != "") {
        var auxiliar = String(num);
        var num_array = Array.from(auxiliar);
        if (num_array.length <= 4) {
            for (var index = 0; index < num_array.length; index++) {
                var newt = document.createElement("div");
                newt.setAttribute("class", "bg-secondary border border-dark pt-5");
                var t = document.createTextNode("El numero " + num_array[index]);
                newt.appendChild(t);
                // document.getElementById("prueba").appendChild(newt);
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

                    break;
                case 3:

                    break;
                case 4:

                    break;

                default:
                    break;
            }

        } else {
            alert('Has metido mas de 4 numeros');
            return false;
        }

    } else {
        alert('Lo has dejado en blanco o has metidop lertras ');
        return false;
    }
}