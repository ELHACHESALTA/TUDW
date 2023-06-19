// Personaliza el elemento que ingresa por parámetro para que se visualice según lo necesitado.
function personalizarCaja(elemento, anchoBorde, colorBorde, fondo) {
    elemento.style.borderWidth = anchoBorde;
    elemento.style.borderColor = colorBorde;
    elemento.style.background = fondo;
}

// Valida que los campos para el dia, mes y año acepten solamente valores numéricos enteros positivos.
function validarFechaNumEntPos() {
    var dia = document.getElementById("dia");
    var mes = document.getElementById("mes");
    var anio = document.getElementById("anio");
    var resultado;
    if (isNaN(parseInt(dia.value)) || !(Number.isInteger(Number(dia.value))) || parseInt(dia.value) < 0) {
        personalizarCaja(dia, "2px", "red", "#fea993");
        resultado = false;
    } else {
        personalizarCaja(dia, "2px", "green", "#96f97b");
        resultado = true;

    }
    if (isNaN(parseInt(mes.value)) || !Number.isInteger(Number(mes.value)) || parseInt(mes.value) < 0) {
        personalizarCaja(mes, "2px", "red", "#fea993");
        resultado = false;
    } else {
        personalizarCaja(mes, "2px", "green", "#96f97b");
        resultado = true;
    }
    if (isNaN(parseInt(anio.value)) || !Number.isInteger(Number(anio.value)) || parseInt(anio.value) < 0) {
        personalizarCaja(anio, "2px", "red", "#fea993");
        resultado = false;
    } else {
        personalizarCaja(anio, "2px", "green", "#96f97b");
        resultado = true;
    }
    return resultado;
}

// Valida que la fecha sea una fecha válida, teniendo en cuenta días del mes, cantidad de meses, año bisiesto, etc. Ejemplo: 31/06/2023 es inválida.
function validarFechaFormato() {
    var dia = document.getElementById("dia");
    var mes = document.getElementById("mes");
    var anio = document.getElementById("anio");
    var fechaActual = new Date();
    var diaActual = fechaActual.getDate();
    var mesActual = fechaActual.getMonth() + 1;
    var anioActual = fechaActual.getFullYear();
    var fechaComprobacion = new Date(anio.value, mes.value, 0);
    var resultado = true;
    if (parseInt(anio.value) == anioActual) {
        if (parseInt(mes.value) == mesActual) {
            if (parseInt(dia.value) < 0 || parseInt(dia.value) > diaActual) {
                personalizarCaja(dia, "2px", "red", "#fea993");
                resultado = false;
            }
        } else {
            if (parseInt(dia.value) < 0 || parseInt(dia.value) > fechaComprobacion.getDate()) {
                personalizarCaja(dia, "2px", "red", "#fea993");
                resultado = false;
            }
        }
    } else {
        if (parseInt(dia.value) < 0 || parseInt(dia.value) > fechaComprobacion.getDate()) {
            personalizarCaja(dia, "2px", "red", "#fea993");
            resultado = false;
        }
    }
    if (parseInt(anio.value) == anioActual) {
        if (parseInt(mes.value) < 0 || parseInt(mes.value) > mesActual) {
            personalizarCaja(mes, "2px", "red", "#fea993");
            resultado = false;
        }
    } else {
        if (parseInt(mes.value) < 0 || parseInt(mes.value) > 12) {
            personalizarCaja(mes, "2px", "red", "#fea993");
            resultado = false;
        }
    }
    if (parseInt(anio.value) < 0 || parseInt(anio.value) > anioActual) {
        personalizarCaja(anio, "2px", "red", "#fea993");
        resultado = false;
    }
    return resultado;
}

// Valida que todos los datos hayan sido rellenados al ser obligatorios a excepción de las observaciones.
// Valida que los nombres y apellidos solo contengan caracteres alfabéticos y no numéricos.
function validarCamposObligatorios() {
    var nombre = document.getElementById("nombre");
    var apellido = document.getElementById("apellido");
    var obraSocial = document.getElementById("obras_sociales")
    var expresionRegularNombreApellido = /^([a-zA-Z]+)(\s+([a-zA-Z]+))*$/;
    var resultado;
    if (nombre.value == null || nombre.value.length == 0 || nombre.value.match(/^(\s+)$/) || !(nombre.value.match(expresionRegularNombreApellido))) {
        personalizarCaja(nombre, "2px", "red", "#fea993");
        resultado = false;
    } else {
        personalizarCaja(nombre, "2px", "green", "#96f97b");
        resultado = true;
    }
    if (apellido.value == null || apellido.value.length == 0 || apellido.value.match(/^(\s+)$/) || !(apellido.value.match(expresionRegularNombreApellido))) {
        personalizarCaja(apellido, "2px", "red", "#fea993");
        resultado = false;
    } else {
        personalizarCaja(apellido, "2px", "green", "#96f97b");
        resultado = true;
    }
    if (email.value == null || email.value.length == 0) {
        personalizarCaja(email, "2px", "red", "#fea993");
        resultado = false;
    } else {
        personalizarCaja(email, "2px", "green", "#96f97b");
        resultado = true;
    }
    if (obraSocial.value == null || obraSocial.value.length == 0) {
        personalizarCaja(obraSocial, "2px", "red", "#fea993");
        resultado = false;
    } else {
        personalizarCaja(obraSocial, "2px", "green", "#96f97b");
        resultado = true;
    }
    return resultado;
}

// Validar la estructura de un mail - considerar el dominio, los caracteres a ingresar, los símbolos que debe tener.
function validarEmail() {
    var email = document.getElementById("email");
    var expresionRegularEmail = /^(?!([0-9]))\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.[a-zA-Z]{2,10})+$/;
    if (!(email.value.match(expresionRegularEmail))) {
        personalizarCaja(email, "2px", "red", "#fea993");
        resultado = false;
    } else {
        personalizarCaja(email, "2px", "green", "#96f97b");
        resultado = true;
    }
    return resultado;
}

function validar() {
    var comprobacion1 = validarFechaNumEntPos();
    var comprobacion2 = validarFechaFormato();
    var comprobacion3 = validarCamposObligatorios();
    var comprobacion4 = validarEmail();
    if (comprobacion1 && comprobacion2 && comprobacion3 && comprobacion4) {
        alert ("TODO CORRECTO. SE ENVIARÁ EL FORMULARIO.");
    } else {
        alert ("LOS CAMPOS MARCADOS EN ROJO HAN SIDO INGRESADOS INCORRECTAMENTE. INTÉNTELO NUEVAMENTE");
    }
}