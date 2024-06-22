var contador = 1;
var resultado = Array();

function cargarPagina(_id) {
    switch(_id) {
        case 2:
            cargarEnElemento("contenido", "../php/limpiar.php");
            cargarEnElemento("sub-menu", "../../Pregunta N°2/pregunta2.html");
        case 3:
            cargarEnElemento("contenido", "../../Pregunta N°3/pregunta3.php")
        case 4: 
        case 5:
    }
}

function cambiarColor() {
    let colorid = document.getElementById("idelementos").value;
    let colorcambiar = document.getElementById(colorid);
    colorcambiar.style.backgroundColor = document.getElementById("colorid").value; 
}

function aumentar() {
    contador++;
    document.getElementById("contador").innerHTML = contador;
}

function operar(_id) {
    while (resultado.length !== 0) resultado.pop();
    let contenido = document.getElementById("contenido");
    contenido.innerHTML = "";
    let br = document.createElement("br");
    for (let cantidad = 0; cantidad < parseInt(document.getElementById("cantidadoperar").value); cantidad++) {
        let div = document.createElement("div");
        div.id = "d" + cantidad;
        let label = document.createElement("label");
        let input = document.createElement("input");
        input.type = "number";
        input.id = cantidad;
        let num1 = (Math.random() % 10).toPrecision(2);
        let num2 = (Math.random() % 10).toPrecision(2);
        switch(_id) {
            case 1:
                label.innerHTML = num1 + "+" + num2 + "=";
                resultado.push(parseFloat(num1) + parseFloat(num2));
                break;
            case 2:  
                label.innerHTML = num1 + "-" + num2 + "=";
                resultado.push(parseFloat(num1) - parseFloat(num2));
                break;
            case 3:
                label.innerHTML = num1 + "*" + num2 + "=";
                resultado.push(parseFloat(num1) * parseFloat(num2));
                break;
            case 4:
                label.innerHTML = num1 + "/" + num2 + "=";
                resultado.push(parseFloat(num1) / parseFloat(num2));
                break;
        }
        input.id = "c" + cantidad;
        div.appendChild(label);
        div.appendChild(input);
        div.appendChild(br);
        contenido.appendChild(div);
    }
    document.getElementById("contenido").innerHTML += "<br><button onclick='comprobar()'>Comprobar</button>"
    document.getElementById("sub-menu").innerHTML += `<br><div id='r'></div>`;
}

function comprobar() {
    let correctos = 0;
    for (let cantidad = 0; cantidad < resultado.length; cantidad++) {
        if (resultado[cantidad] == document.getElementById(`c${cantidad}`).value) {
            document.getElementById(`d${cantidad}`).style.backgroundColor = "green";
            correctos++;
        }
        else document.getElementById(`d${cantidad}`).style.backgroundColor = "red";
    }
    document.getElementById("r").innerHTML = correctos;
}

function eliminar(_id) {
    cargarEnElementoFetch("contenido", "../../Pregunta N°3/listaalumnos.php")
}

function eliminarAlumno(_id) {
    cargarEnElementoFetchFuncion(eliminar(_id), `../../Pregunta N°3/eliminar.php?e=${_id}`);
}

function insertarA(_alumno) {
    cargarEnElementoFetch("contenido", "../../Pregunta N°3/pregunta3.php");
}

function ingresarAlumno() {
    cargarEnFuncionFetch(insertarA, "../../Pregunta N°3/insertar.php")
}

function insertarAlumno() {
    enviarFormularioFetchFuncion(ingresarAlumno, "formalumno")
}

function cargarEnElemento(_idelemento, _archivo) {
    var ajax = new XMLHttpRequest();
    ajax.open("POST", _archivo, true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status) {
            document.getElementById(_idelemento).innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}

function cargarEnFuncion(_javascript, _archivo) {
    var ajax = new XMLHttpRequest();
    ajax.open("POST", _archivo, true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status) {
            _javascript(ajax.responseText);
        }
    }
    ajax.send();
}

function cargarEnElementoFetch(_idelemento, _archivo) {
    fetch(_archivo).then((response) => response.text()).then((data) => {
        document.getElementById(_idelemento).innerHTML = data;
    })
}

function cargarEnFuncionFetch(_javascript, _archivo) {
    fetch(_archivo).then((response) => response.text())-then((data) => {
        _javascript(data);
    })
}

function enviarFormularioFetch(_idformulario, _archivo, _idelemento) {
    fetch(_archivo, {
        method: "POST",
        body: new FormData(document.getElementById(_idformulario))
    }).then((response) => response.text()).then((data) => {
        document.getElementById(_idelemento).innerHTML = data;
    })
}

function enviarFormularioFetchFuncion(_idformulario, _archivo, _javascript) {
    fetch(_archivo, {
        method: "POST",
        body: new FormData(document.getElementById(_idformulario))
    }).then((response) => response.text()).then((data) => {
        _javascript(data);
    })
}

function enviarFormularioSend(_idformulario, _archivo, _idelemento) {
    var ajax = new XMLHttpRequest();
    ajax.open("POST", _archivo, true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status) {
            document.getElementById(_idelemento).innerHTML = ajax.responseText;
        }
    }
    ajax.send(new FormData(document.getElementById(_idformulario)));
}