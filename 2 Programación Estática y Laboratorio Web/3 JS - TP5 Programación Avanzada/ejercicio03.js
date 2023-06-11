function controlarPalindromo() {
    var ingreso = document.getElementById("ingreso").value;
    var control = ingreso.replaceAll(" ", "");
    control = control.toLowerCase();
    var i;
    var control2 = "";
    for (i = (control.length - 1); i >= 0; i--) {
        control2 += control[i];
    }
    alert(control);
    alert(control2);
    if (control == control2) {
        alert("BIEN");
    } else {
        alert("MAL");
    }
}

//Otra forma de realizar el control de palíndromo con funciones no vistas en la cátedra.
function controlarPalindromo2() {
    var ingreso = document.getElementById("ingreso").value;
    var control = ingreso.replaceAll(" ", "");
    control = control.toLowerCase();
    // Convierto los caracteres de la cadena en índices de un arreglo.
    var control2 = control.split("");
    // Invierto los indices del arreglo.
    control2 = control2.reverse();
    // Uno los índices del arreglo para formar nuevamente una cadena de caracteres.
    control2 = control2.join("");
    alert(control);
    alert(control2);
    if (control == control2) {
        alert("BIEN");
    } else {
        alert("MAL");
    }
}