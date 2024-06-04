var entrada = 0;

function cargarPagina(_id) {
    switch (_id) {
        case 1:
            cargarEn("principal", "../../Ejercicio N°1/php/limpiar.php");
            cargarEn("menu", "../../Ejercicio N°1/php/botones.php");
            break;
        case 2:
            cargarEn("menu", "../../Ejercicio N°2/php/galeria.php");
            break;
        case 3:
            cargarEn("principal", "../../Ejercicio N°1/php/limpiar.php");
            cargarEn("menu", "../../Ejercicio N°1/php/limpiar.php");
            cargarEn("principal", "../../Ejercicio N°3/php/login.php");

    }
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

function cargarBotones() {
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "../../Ejercicio N°1/php/botones.php", true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState === 4 && ajax.status === 200) {
            document.getElementById("menu").innerHTML = ajax.responseText;
        }
    }
    ajax.send();
    document.getElementById("mensaje").innerHTML = "Universitario: Aparicio Llanquipacha Gabriel; CU: 111-381;";
}

function mostrarDetalles(_id) {
    var ajax = new XMLHttpRequest();
    ajax.open("POST", `../../Ejercicio N°1/php/recuperarimagen.php?id=${_id}`, true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState === 4 && ajax.status === 200) {
            document.getElementById("principal").innerHTML = `<img src="../../Ejercicio N°1/multimedia/${ajax.responseText}" alt="Imagen de la pregunta ${ajax.responseText}" class="img-fluid">`;
            document.getElementById("principal").style.alignItems = "center";
            document.getElementById("principal").style.justifyContent = "center";
        }
    }
    ajax.send();
}

function validarLogin() {
    enviarFormulario("formulario", "../../Ejercicio N°1/php/captcha.php", "");
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
    })
}

function cargarMenu() {
    if (entrada == 0) {
        cargarBotones();
        entrada = 1;
    }
}