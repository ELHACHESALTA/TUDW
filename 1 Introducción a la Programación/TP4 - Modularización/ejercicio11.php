<?php
    /** Encripta un número de cuatro dígitos
    * @param int $numParaEncriptar
    * @return int
    */
    function encriptarNum($numParaEncriptar) {
        /* int $digitoUnoE, $digitoDosE, $digitoTresE, $digitoCuatroE, $digitoAuxE */
        $digitoUnoE = (int)($numParaEncriptar/1000);
        $digitoDosE = (int)($numParaEncriptar % 1000)/100;
        $digitoTresE = (int)(($numParaEncriptar % 1000)% 100)/10;
        $digitoCuatroE = (int)((($numParaEncriptar % 1000)% 100)% 10);
        $digitoUnoE = ($digitoUnoE+7) % 10;
        $digitoDosE = ($digitoDosE+7) % 10;
        $digitoTresE = ($digitoTresE+7) % 10;
        $digitoCuatroE = ($digitoCuatroE+7) % 10;
        $digitoAuxE = $digitoTresE;
        $digitoTresE = $digitoUnoE;
        $digitoUnoE = $digitoAuxE;
        $digitoAuxE = $digitoCuatroE;
        $digitoCuatroE = $digitoDosE;
        $digitoDosE = $digitoAuxE;
        return ($digitoUnoE*1000)+($digitoDosE*100)+($digitoTresE*10)+$digitoCuatroE;
    }

    /** Desencripta un número de cuatro dígitos
    * @param int $numParaDesencriptar
    * @return int
    */
    function desencriptarNum($numParaDesencriptar) {
        /* int $digitoUnoD, $digitoDosD, $digitoTresD, $digitoCuatroD, $digitoAuxD */
        $digitoUnoD = (int)($numParaDesencriptar/1000);
        $digitoDosD = (int)($numParaDesencriptar % 1000)/100;
        $digitoTresD = (int)(($numParaDesencriptar % 1000)% 100)/10;
        $digitoCuatroD = (int)((($numParaDesencriptar % 1000)% 100)% 10);
        $digitoUnoD = ($digitoUnoD+3) % 10;
        $digitoDosD = ($digitoDosD+3) % 10;
        $digitoTresD = ($digitoTresD+3) % 10;
        $digitoCuatroD = ($digitoCuatroD+3) % 10;
        $digitoAuxD = $digitoTresD;
        $digitoTresD = $digitoUnoD;
        $digitoUnoD = $digitoAuxD;
        $digitoAuxD = $digitoCuatroD;
        $digitoCuatroD = $digitoDosD;
        $digitoDosD = $digitoAuxD;
        return ($digitoUnoD*1000)+($digitoDosD*100)+($digitoTresD*10)+$digitoCuatroD;
    }

    /* PROGRAMA Principal */
    /* Encripta y muestra el número ingresado, luego lo desencripta y lo vuelve a mostrar */
    /* int $num, $numEncriptado, $numDesencriptado */
    echo "Ingrese un número de 1 a 4 cifras positivo: ";
    $num = trim(fgets(STDIN));
    $numEncriptado = encriptarNum($num);
    echo "El número " . $num . " encriptado es igual a " . $numEncriptado . "\n";
    $numDesencriptado = desencriptarNum($numEncriptado);
    echo "El número encriptado ". $numEncriptado . " luego de ser desencriptado es igual a " . $numDesencriptado . "\n";
    echo $numDesencriptado == $num ? "El encriptado y desencriptado se realizó correctamente" : "El encriptado y desencriptado falló";
?>