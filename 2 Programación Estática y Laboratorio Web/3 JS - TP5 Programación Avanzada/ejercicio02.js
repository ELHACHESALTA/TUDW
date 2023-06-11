function ocultarBotonModoClaro() {
    document.getElementById("botonModoClaro").style.display = "none";
}

function modoOscuro() {
    document.getElementById("body").style.backgroundColor = "#000000";
    document.getElementById("contenedor").style.backgroundColor = "#4B4B4B";
    document.getElementById("busqueda").style.backgroundColor = "#636363";
    document.getElementById("botonModoOscuro").style.display = "none";
    document.getElementById("botonModoClaro").style.display = "";
}

function modoClaro() {
    document.getElementById("body").style.backgroundColor = "";
    document.getElementById("contenedor").style.backgroundColor = "";
    document.getElementById("busqueda").style.backgroundColor = "";
    document.getElementById("botonModoOscuro").style.display = "";
    document.getElementById("botonModoClaro").style.display = "none";
}