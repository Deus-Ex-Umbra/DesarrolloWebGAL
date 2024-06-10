function cargarBandejaEntrada() {
    cargarEnSend("contenido", "../php/bandeja_entrada.php");
}


function cargarRedactarMensaje() {
    cargarEnSend("contenido", "../php/redactar_mensaje.html");
}

function cargarCorreosEnviados() {
    cargarEnSend("contenido", "../php/correos_enviados.php");
}

function enviarMensaje() {
    enviarFormulario("enviar", "../php/agregar_mensaje.php", "contenido")
}

function cargarCorreo(_id) {
    cargarEnSend("contenido", `../php/correo_visualizar.php?id=${_id}`)
}

function cargarEnSend(_elemento, _archivo) {
    var ajax = new XMLHttpRequest();
    ajax.open("POST", _archivo, true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState === 4 && ajax.status === 200) document.getElementById(_elemento).innerHTML = ajax.responseText;
    }
    ajax.send();
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