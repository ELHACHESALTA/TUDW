<?php

    include 'ejercicio08 - funcion.php';
    include 'ejercicio08 - teatro.php';

    $funcion1 = new Funcion ("Mickey Mouse 1", "11:30:00", "04:00:00", "300");
    $funcion2 = new Funcion ("Mickey Mouse 2", "12:30:00", "01:00:00", "300");
    $funcion3 = new Funcion ("Mickey Mouse 3", "13:30:00", "01:00:00", "300");
    $funcion4 = new Funcion ("Mickey Mouse 4", "14:30:00", "01:00:00", "300");

    $arregloFunciones = [];
    $teatro1 = new Teatro("Teatro Colon", "San Martin 132", $arregloFunciones);

    if ($teatro1 -> cargarFuncion($funcion1) == false) {
        echo "La función 1 se ha cargado correctamente. \n";
    } else {
        echo "La función 1 no se ha podido cargar porque se solapa con otra en este teatro. \n";
    }
    if ($teatro1 -> cargarFuncion($funcion2) == false) {
        echo "La función 2 se ha cargado correctamente. \n";
    } else {
        echo "La función 2 no se ha podido cargar porque se solapa con otra en este teatro. \n";
    }
    if ($teatro1 -> cargarFuncion($funcion3) == false) {
        echo "La función 3 se ha cargado correctamente. \n";
    } else {
        echo "La función 3 no se ha podido cargar porque se solapa con otra en este teatro. \n";
    }
    if ($teatro1 -> cargarFuncion($funcion4) == false) {
        echo "La función 4 se ha cargado correctamente. \n";
    } else {
        echo "La función 4 no se ha podido cargar porque se solapa con otra en este teatro. \n";
    }

    echo $teatro1;

?>