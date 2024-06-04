function cargarPagina(_id) {
    document.getElementById("titulo").innerHTML = `Pregunta N°${_id}`;
    document.getElementById("titulo").style.color = "red"; 
    switch(_id) {
        case 1:
            cargarEnSend("sub-menu", "../../Pregunta N°1/html/datos.html");
            cargarEnSend("contenido", "../../Página Principal/php/limpiar.php");
            break;
        case 2:
            cargarEnSend("sub-menu", "../../Pregunta N°2/html/form2.html");
            cargarEnSend("contenido", "../../Página Principal/php/limpiar.php");
            break;
        case 3:
            cargarEnSend("sub-menu", "../../Pregunta N°3/php/galeria.php");
            cargarEnSend("contenido", "../../Página Principal/php/limpiar.php");
            break;
        case 4:
            cargarEnSend("sub-menu", "../../Pregunta N°4/html/botones.html");
            cargarEnSend("contenido", "../../Página Principal/php/limpiar.php");
            break;
        case 5:
            cargarEnSend("sub-menu", "../../Pregunta N°5/php/form5.php");
            cargarEnSend("contenido", "../../Página Principal/php/limpiar.php");
            break;
    }
}

function tabla() {
    enviarFormulario("f1", "../../Pregunta N°1/php/tabla.php", "contenido");
}

function crearParrafo() {
    var contenido = document.getElementById("contenido");
    var _cf = document.getElementById("colorf2").value;
    var _c = document.getElementById("color2").value;
    var _t = document.getElementById("texto2").value;
    contenido.innerHTML += `<p style='background-color:${_cf}; color:${_c}'>${_t}</p>`;
}

function mostrarLibro(_titulo, _autor, _editorial, _anio, _id) {
    var contenido = document.getElementById("contenido").innerHTML;
    var imagen = cargarEnSend("", `../../Pregunta N°3/php/imagen-php?id=${_id}`);
    contenido += `<div style='display:flex;'>
    <img src='../../Página Principal/${imagen}'></img>
    <br>
    <div>
    Título: ${_titulo}
    Autor: ${_autor}
    Editorial: ${_editorial}
    Año: ${_anio}
    </div>
    </div>`;
}

function listar() {
    enviarFormulario("l4", "../../Pregunta N°4/php/tabla.php", "contenido");
}

function cambiarCalendario() {
    enviarFormulario("f5", "../../Pregunta N°5/php/calendario.php", "contenido");
}

function cargarEnSend(_elemento, _archivo) {
    var ajax = new XMLHttpRequest();
    ajax.open("POST", _archivo, true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState === 4 && ajax.status === 200) document.getElementById(_elemento).innerHTML = ajax.responseText;
    }
    ajax.send();
}

function cargarEnFetch(_elemento, _archivo) {
    fetch(_archivo)
    .then(response => response.text())
    .then(data => {
        document.getElementById(_elemento).innerHTML = data;
    })
}

function enviarFormulario(_elemento, _archivo, _destino) {
    var form = new FormData(document.getElementById(_elemento));
    fetch (_archivo, {
        method: 'POST',
        body: form
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById(_destino).innerHTML = data;
    }
    )
}

function enviarFormularioGET(_elemento, _archivo, _destino) {
    var form = new FormData(document.getElementById(_elemento));
    fetch (_archivo, {
        method: 'GET',
        body: form
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById(_destino).innerHTML = data;
    }
    )
}
