
function mostrarProfes() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '../administracion/listaProfesores.php', true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            var json = JSON.parse(xhr.responseText);

            var template = ``;
            json.map(function (data) {
                template += `
                <div class="row">
                    <tr>
                        <th scope="row" class="col-md-3">${data.nombre}</th>
                        <td>${data.apellidos}</td>
                        <td class="col-md-3"><a href="mailto:${data.email}">${data.email}</a></td>
                        <td class="col-md-3">
                        <button class="btn btn-danger task-delete" \onclick=\"borrrarProfesor()\">Eliminar</button>
                      </td>                    
                    </tr>
                </div>
                `;
                return template;
            });
            var cabeceraTabla = `
                <thead>
                    <tr>
                        <th scope="col-3">Nombre</th>
                        <th scope="col-3">Apellidos</th>
                        <th scope="col-3">Email</th>
                        <th scope="col-3"></th>
                    </tr>
                </thead>
            `;

            document.getElementById('listaProfesores').innerHTML = cabeceraTabla +"<tbody>"+template+"</tbody>";
        } else {
            console.log('Existe un error de tipod: ' + xhr.status);
        }
    };
    xhr.send();
}
function borrrarProfesor() {
    confirm('Estas seguro??');
}

