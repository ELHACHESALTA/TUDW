<?php
    /* PROGRAMA Desencriptado */
    /* Desencripta un número entero de cuatro cifras */
    /* INT $numeroIngresado, $digitoUno, $digitoDos, $digitoTres, $digitoCuatro, $numeroAuxiliar, $numeroDesencriptado */
    echo "Ingrese el número encriptado: ";
    $numeroIngresado = trim(fgets(STDIN));
    $digitoUno = (int) ($numeroIngresado / 1000);
    $digitoDos = (int) (($numeroIngresado % 1000) / 100);
    $digitoTres = (int) ((($numeroIngresado % 1000) % 100) / 10);
    $digitoCuatro = (int) ((($numeroIngresado % 1000) % 100) % 10);
    $digitoUno = ($digitoUno + 3) % 10;
    $digitoDos = ($digitoDos + 3) % 10;
    $digitoTres = ($digitoTres + 3) % 10;
    $digitoCuatro = ($digitoCuatro + 3) % 10;
    $numeroAuxiliar = $digitoTres;
    $digitoTres =  $digitoUno;
    $digitoUno = $numeroAuxiliar;
    $numeroAuxiliar = $digitoCuatro;
    $digitoCuatro = $digitoDos;
    $digitoDos = $numeroAuxiliar;
    $numeroDesencriptado = ($digitoUno * 1000) + ($digitoDos * 100) + ($digitoTres * 10) + $digitoCuatro;
    echo "El número desencriptado es: " . $numeroDesencriptado;
?>