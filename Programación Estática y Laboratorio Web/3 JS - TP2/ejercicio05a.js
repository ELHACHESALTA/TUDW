function suma() {
    var x, y, suma, salida;
	x = prompt("Valor de X = ", "");
	y = prompt("Valor de Y = ", "");
	suma = parseInt(x) + parseInt(y);
	salida = document.getElementById("salida");
	salida.value += x+" + "+y+" = "+suma+"\n";
}

function resta() {
    var x, y, resta, salida;
	x = prompt("Valor de X = ", "");
	y = prompt("Valor de Y = ", "");
	resta = parseInt(x) - parseInt(y);
	salida = document.getElementById("salida");
	salida.value += x+" - "+y+" = "+resta+"\n";
}

function division() {
    var x, y, division, salida;
	x = prompt("Valor de X = ", "");
	y = prompt("Valor de Y = ", "");
	division = parseInt(x) / parseInt(y);
	salida = document.getElementById("salida");
	salida.value += x+" / "+y+" = "+division+"\n";
}

function multiplicacion() {
    var x, y, multiplicacion, salida;
	x = prompt("Valor de X = ", "");
	y = prompt("Valor de Y = ", "");
	multiplicacion = parseInt(x) * parseInt(y);
	salida = document.getElementById("salida");
	salida.value += x+" * "+y+" = "+multiplicacion+"\n";
}

function potencia() {
    var x, y, i, potencia = 1, salida;
	x = prompt("Valor de X = ", "");
	y = prompt("Valor de Y = ", "");
    if (parseInt(y) == 0) {
    } else if (parseInt(y) > 0) {
        for(i = 0; i < parseInt(y); i++) {
            potencia *= parseInt(x);
        }
    } else if (parseInt(y) < 0) {
        for(i = 0; i < -(parseInt(y)); i++) {
            potencia *= parseInt(x);
        }
		potencia = 1 / potencia;
    }
	salida = document.getElementById("salida");
	salida.value += x+" ^ "+y+" = "+potencia+"\n";
}

function cuadrado() {
    var x, cuadrado, salida;
	x = prompt("Valor de X = ", "");
	cuadrado = parseInt(x) * parseInt(x);
	salida = document.getElementById("salida");
	salida.value += x+" ^ 2 = "+cuadrado+"\n";
}