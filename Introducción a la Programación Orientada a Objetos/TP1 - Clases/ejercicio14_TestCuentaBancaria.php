<?php
    include_once ("ejercicio14_CuentaBancaria.php");

    $galicia = new CuentaBancaria(1, 12345678, 200, 365);

    echo $galicia -> getSaldoActual() . "\n";

    $galicia -> actualizarSaldo();

    echo $galicia -> getSaldoActual() . "\n";

    $galicia -> depositar(100);

    echo $galicia -> getSaldoActual() . "\n";

    $galicia -> retirar(50);

    echo $galicia -> getSaldoActual() . "\n";

    echo $galicia . "\n";

?>