<?php
    /* PROGRAMA Asistentes */
    /* Calcula y muestra la cantidad de asistentes a partir de los asistentes varones solteros */
    /* INT $varonesS, $asistentes */
    echo "Ingrese la cantidad de varones solteros que asistieron a la boda: ";
    $varonesS = trim(fgets(STDIN));
    $asistentes = 7.5 * $varonesS;
    echo "A la boda asistieron " . $asistentes . " personas";
?>