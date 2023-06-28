var registroVotantes = new Array();

// Expresiones regulares utilizadas en las diferentes comprobaciones.
var expRegKodos = /^[kK][oO][dD][oO][sS]$/;
var expRegKang = /^[kK][aA][nN][gG]$/;
var expRegBlanco = /^[bB][lL][aA][nN][cC][oO]$/
var expRegDni = /^[1-9][0-9]{7}$/;
var expRegSexo = /^[mMfF]$/;

// Verifica que en el campo Candidato se haya escrito alguna de las tres opciones posibles sin importar may/min y que esté completo.
function validarCandidato(candidato) {
    var resultado = false;
    if (candidato.value == "") {
        candidato.style.backgroundColor = "#FF9090";
    } else if (
        !candidato.value.match(expRegKodos) && 
        !candidato.value.match(expRegKang) && 
        !candidato.value.match(expRegBlanco)) {
            candidato.style.backgroundColor = "#FF9090";
    } else if (candidato.value.match(expRegKodos)) {
        candidato.style.backgroundColor = "#65DA65";
        resultado = true;
    } else if (candidato.value.match(expRegKang)) {
        candidato.style.backgroundColor = "#65DA65";
        resultado = true;
    } else if (candidato.value.match(expRegBlanco)) {
        candidato.style.backgroundColor = "#65DA65";
        resultado = true;
    }
    return resultado;
}

// Verifica que el campo DNI sea un número en un rango entre 10.000.000 y 99.999.999 y que esté completo.
function validarDni(dni) {
    var resultado = 0;
    var comprobacion = true;
    var i = 0;
    if (dni.value == "") {
        dni.style.backgroundColor = "#FF9090";
    } else if (!dni.value.match(expRegDni)) {
        dni.style.backgroundColor = "#FF9090";
    } else if (dni.value.match(expRegDni)) {
        // Verifica que la persona (DNI) no haya votado previamente.
        while (comprobacion && i < registroVotantes.length) {
            if (dni.value.toString() == registroVotantes[i]) {
                comprobacion = false;
            } else {
                i++;
            }
        }
        if (comprobacion == true) {
            registroVotantes.push(dni.value);
            dni.style.backgroundColor = "#65DA65";
            resultado = 1;
        } else {
            dni.style.backgroundColor = "#FF9090";
            // Se emite una alerta en caso que un DNI ya haya sido registrado en el sistema.
            alert("Esta persona ya emitió su voto")
            resultado = -1;
        }
    }
    return resultado;
}

// Verifica que el campo Sexo sea "M" o "F" sin importar may/min y que esté completo.
function validarSexo(sexo) {
    var resultado = false;
    if (sexo.value == "") {
        sexo.style.backgroundColor = "#FF9090";
    } else if (!sexo.value.match(expRegSexo)) {
        sexo.style.backgroundColor = "#FF9090";
    } else if (sexo.value.match(expRegSexo)) {
        sexo.style.backgroundColor = "#65DA65";
        resultado = true;
    }
    return resultado;
}

// Valida la totalidad del formulario al presionar el botón Registrar, si pasa todas las validaciones agrega un voto al contador correspondiente.
function validarFormulario() {
    var candidato = document.getElementById("txCandidato");
    var dni = document.getElementById("txDNI");
    var sexo = document.getElementById("txSexo");
    var votantes = document.getElementById("Votantes");

    var validacionCandidato = validarCandidato(candidato);
    var validacionDni = validarDni(dni);
    var validacionSexo = validarSexo(sexo);
    var voto = document.getElementById("txCandidato");
    var resultadosKodos = document.getElementById("ResultadosKodos");
    var resultadosKang = document.getElementById("ResultadosKang");
    var resultadosBlanco = document.getElementById("ResultadosBlanco");
    var votosKodos = resultadosKodos.innerText;
    var votosKang = resultadosKang.innerText;
    var votosBlanco = resultadosBlanco.innerText;
    if (validacionCandidato == true &&
        validacionDni == 1 &&
        validacionSexo == true) {
            // Luego de realizadas las verificaciones, se suma el voto al candidato correspondiente.
            if (voto.value.match(expRegKodos)) {
                votosKodos++;
                resultadosKodos.innerText = votosKodos;
            } else if (voto.value.match(expRegKang)) {
                votosKang++;
                resultadosKang.innerText = votosKang;
            } else if (voto.value.match(expRegBlanco)) {
                votosBlanco++;
                resultadosBlanco.innerText = votosBlanco;
            }
            // El DNI se adiciona al div "Votantes", separador por -
            if (votantes.innerText == "") {
                votantes.innerText += dni.value;
            } else {
                votantes.innerText += " - " + dni.value;
            }
            candidato.value = "";
            candidato.style.backgroundColor = "";
            dni.value = "";
            dni.style.backgroundColor = "";
            sexo.value = "";
            sexo.style.backgroundColor = "";
    } else if (validacionDni == -1) { 
        candidato.value = "";
        candidato.style.backgroundColor = "";
        dni.value = "";
        dni.style.backgroundColor = "";
        sexo.value = "";
        sexo.style.backgroundColor = "";
    }
}

// Informa los resultados de la votación en el div con id "dResultados".
function cerrarVotacion() {
    var resultadosKodos = document.getElementById("ResultadosKodos");
    var resultadosKang = document.getElementById("ResultadosKang");
    var resultadosBlanco = document.getElementById("ResultadosBlanco");
    var divResultados = document.getElementById("dResultados");
    var votosKodos = resultadosKodos.innerText;
    var votosKang = resultadosKang.innerText;
    var votosBlanco = resultadosBlanco.innerText;
    var diferencia;
    divResultados.style.display = "block";
    if (votosKang < votosBlanco && votosKodos < votosBlanco) {
        divResultados.innerHTML = `
        <h1>HAY MAS VOTOS EN BLANCO, ASÍ QUE NADIE GANÓ</h1>
        `
    } else if (votosKang == votosKodos) {
        divResultados.innerHTML = `
        <h1>EMPATE!</h1>
        `
    } else if (votosKang > votosKodos) {
        diferencia = votosKang - votosKodos;
        divResultados.innerHTML = `
        <h1>Ganó KANG por ${diferencia} voto/s!</h1>
        <img src="images/VoteKang.png">
        `
    } else if (votosKang < votosKodos) {
        diferencia = votosKodos - votosKang;
        divResultados.innerHTML = `
        <h1>Ganó KODOS por ${diferencia} voto/s!</h1>
        <img src="images/VoteKodos.png">
        `
    }
    // Luego del cierre de mesa, no se permite el ingreso de nu nuevo voto ocultando los botones correspondientes.
    document.getElementById("botonVotacion1").style.display = "none";
    document.getElementById("botonVotacion2").style.display = "none";
}