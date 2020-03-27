
function mostrarProfes() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '../administracion/listaProfesores.php', true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            var json = JSON.parse(xhr.responseText);

            var template = ``;
            json.map(function (data) {
                template += `
                    <tr >                    
                        <th scope="row">${data.nombre}</th>
                        <td>${data.apellidos}</td>
                        <td ><a href="mailto:${data.email}">${data.email}</a></td>
                        <td ">
                        <button class="btn btn-danger task-delete" onclick="borrrarProfesor()">Eliminar</button>
                      </td>                                         
                    </tr>
                `;
                return template;
            });
            var cabeceraTabla = `
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Email</th>
                        <th scope="col"></th>
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

