function iniciarTabla() {
    var datosIniciales = new Array();
    datosIniciales[0] = ["Juan Pérez", "Av. Argentina 3000", "Neuquén Capital", "154888888"];
    datosIniciales[1] = ["Tito Sánchez", "Av. Trabajador 300", "Neuquén Capital", "153555555"];
    datosIniciales[2] = ["Cecilia Carrizo", "Sierra Grande 900", "Neuquén Capital", "4485895"];
    datosIniciales[3] = ["Pedro González", "Amaranto Usares 1254", "Neuquén Capital", "4420444"];
    datosIniciales[4] = ["Verónica Lozano", "Saturnino Torres 100", "Neuquén Capital", "5425842"];
    var i;
    for (i in datosIniciales) {
        insertarRegistro(
            datosIniciales[i][0],
            datosIniciales[i][1],
            datosIniciales[i][2],
            datosIniciales[i][3],
        );
    }
}

var nombre = document.getElementById("nombre");
nombre.value="";

function insertarRegistro(nombre, direccion, ciudad, telefono) {
    var tabla = document.getElementById("tabla");
    // Se crea una nueva fila en la tabla para el nuevo registro.
    var registro = tabla.insertRow(tabla.rows.length);
    // Se crean nuevas celdas en la fila para el nuevo registro.
    var cel0 = registro.insertCell(0);
    var cel1 = registro.insertCell(1);
    var cel2 = registro.insertCell(2);
    var cel3 = registro.insertCell(3);
    var cel4 = registro.insertCell(4);
    // Se rellenan las celdas con los datos ingresados por los input.
    cel0.innerHTML = nombre;
    cel1.innerHTML = direccion;
    cel2.innerHTML = ciudad;
    cel3.innerHTML = telefono;
    cel4.innerHTML = "<a href='#' onclick='borrarRegistro(this.parentNode.parentNode.rowIndex)'>Borrar</a>";
    // Se elimina el contenido de los input ingresados como nuevo registro.
    var nombreInput = document.getElementById("nombre");
    nombreInput.value = "";
    var direccionInput = document.getElementById("direccion");
    direccionInput.value = "";
    var ciudadInput = document.getElementById("ciudad");
    ciudadInput.value = "";
    var telefonoInput = document.getElementById("telefono");
    telefonoInput.value = "";
}

function borrarRegistro(numero) {
    var tabla = document.getElementById("tabla");
    tabla.deleteRow(numero);
}