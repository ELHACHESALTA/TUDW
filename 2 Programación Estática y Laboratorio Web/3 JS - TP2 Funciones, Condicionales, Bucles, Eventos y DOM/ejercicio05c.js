function pesoDolar() {
    var x, conversion, salida;
	x = prompt("Peso/s = ", "");
	conversion = parseInt(x) * 0.0041;
	salida = document.getElementById("salida");
	salida.value += x+" Peso/s = "+conversion+" Dólar/es.\n";
}

function dolarPeso() {
    var x, conversion, salida;
	x = prompt("Dólar/es = ", "");
	conversion = parseInt(x) * 244.60;
	salida = document.getElementById("salida");
	salida.value += x+" Dólar/es = "+conversion+" Peso/s.\n";
}

function pesoReal() {
    var x, conversion, salida;
	x = prompt("Peso/s = ", "");
	conversion = parseInt(x) * 0.020;
	salida = document.getElementById("salida");
	salida.value += x+" Peso/s = "+conversion+" Real/es.\n";
}

function realPeso() {
    var x, conversion, salida;
	x = prompt("Real/es = ", "");
	conversion = parseInt(x) * 50.13;
	salida = document.getElementById("salida");
	salida.value += x+" Real/es = "+conversion+" Peso/s.\n";
}

function pesoEuro() {
    var x, conversion, salida;
	x = prompt("Peso/s = ", "");
	conversion = parseInt(x) * 0.0038;
	salida = document.getElementById("salida");
	salida.value += x+" Peso/s = "+conversion+" Euro/s.\n";
}

function euroPeso() {
    var x, conversion, salida;
	x = prompt("Euro/s = ", "");
	conversion = parseInt(x) * 263.27;
	salida = document.getElementById("salida");
	salida.value += x+" Euro/s = "+conversion+" Peso/s.\n";
}