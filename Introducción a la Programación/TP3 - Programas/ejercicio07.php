<?php
    /* PROGRAMA MayoriaEdad */
    /* determinar si una persona es mayor de edad */
    /* Boolean $esMayor, Int $edad, String $nombre, $mensaje */

    echo "Ingrese su nombre ";
    $nombre = trim(fgets(STDIN));
    echo "Ingrese su edad ";
    $edad = trim(fgets(STDIN));

    $esMayor = $edad >= 18;
    $mensaje = $esMayor ? $nombre . " es mayor de edad" : $nombre . " es menor de edad ";
    echo $mensaje;
?>