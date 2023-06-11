function comprobarCuit() {
    var cuit = document.getElementById("cuit");
    var subCuitIdent = cuit.value.substr(0, 10);
    var subCuitVerif = cuit.value.substr(10, 1);
    var ident0 = parseInt(subCuitIdent[0]) * 5;
    var ident1 = parseInt(subCuitIdent[1]) * 4;
    var ident2 = parseInt(subCuitIdent[2]) * 3;
    var ident3 = parseInt(subCuitIdent[3]) * 2;
    var ident4 = parseInt(subCuitIdent[4]) * 7;
    var ident5 = parseInt(subCuitIdent[5]) * 6;
    var ident6 = parseInt(subCuitIdent[6]) * 5;
    var ident7 = parseInt(subCuitIdent[7]) * 4;
    var ident8 = parseInt(subCuitIdent[8]) * 3;
    var ident9 = parseInt(subCuitIdent[9]) * 2;
    var valor1 = ident0 + ident1 + ident2 + ident3 + ident4 + ident5 + ident6 + ident7 + ident8 + ident9
    var valor2 = valor1 % 11
    var valor3 = 11 - valor2;
    if (valor3 == 11 && parseInt(subCuitVerif) == 0) {
        alert("El CUIT ingresado es Correcto.");
    } else if (valor3 == 10 && parseInt(subCuitVerif) == 9) {
        alert("El CUIT ingresado es Correcto.");
    } else if (parseInt(subCuitVerif) == valor3) {
        alert("El CUIT ingresado es Correcto.");
    } else {
        alert("El CUIT ingresado es Incorrecto.");
    }
}