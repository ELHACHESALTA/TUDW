<?php
    /* PROGRAMA Encriptado */
    /* Encripta un número entero de cuatro cifras */
    /* INT $numeroIngresado, $digitoUno, $digitoDos, $digitoTres, $digitoCuatro, $numeroAuxiliar, $numeroEncriptado */
    echo "Ingrese el número que quiere encriptar: ";
    $numeroIngresado = trim(fgets(STDIN));
    $digitoUno = (int) ($numeroIngresado / 1000);
    $digitoDos = (int) (($numeroIngresado % 1000) / 100);
    $digitoTres = (int) ((($numeroIngresado % 1000) % 100) / 10);
    $digitoCuatro = (int) ((($numeroIngresado % 1000) % 100) % 10);
    $digitoUno = ($digitoUno + 7) % 10;
    $digitoDos = ($digitoDos + 7) % 10;
    $digitoTres = ($digitoTres + 7) % 10;
    $digitoCuatro = ($digitoCuatro + 7) % 10;
    $numeroAuxiliar = $digitoTres;
    $digitoTres = $digitoUno;
    $digitoUno = $numeroAuxiliar;
    $numeroAuxiliar = $digitoCuatro;
    $digitoCuatro = $digitoDos;
    $digitoDos = $numeroAuxiliar;
    $numeroEncriptado = ($digitoUno * 1000) + ($digitoDos * 100) + ($digitoTres * 10) + $digitoCuadro;
    echo "El número encriptado es: " . $numeroEncriptado;
?>