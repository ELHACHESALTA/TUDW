<?php
    /**
     * a) Retorna un arreglo asociativo de tipo string a partir de los datos ingresados
     * @return array
     */
    function leerDatosCirco() {
        /* array datosCirco */
        $datosCirco = [];
        echo "Ingrese el nombre del Circo: ";
        $datosCirco ["nombre"] = trim(fgets(STDIN));
        echo "Ingrese el finicio del Circo: ";
        $datosCirco ["finicio"] = trim(fgets(STDIN));
        echo "Ingrese el valor de la Entrada: ";
        $datosCirco ["valorEntrada"] = trim(fgets(STDIN));
        echo "Ingrese la cantidad de Payasos: ";
        $datosCirco ["cantPayasos"] = trim(fgets(STDIN));
        return $datosCirco;
    }

    /* b)PROGRAMA Principal */
    /* Invoca la función leerDatosCirco y muestra en pantalla los datos de la misma */
    print_r(leerDatosCirco());
?>