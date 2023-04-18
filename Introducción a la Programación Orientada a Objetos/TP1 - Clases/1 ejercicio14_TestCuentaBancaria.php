<?php
    include 'ejercicio14 - cuentaBancaria.php';

    $galicia = new CuentaBancaria();

    echo $galicia -> getSaldoActual() . "\n";

    $galicia -> actualizarSaldo();

    echo $galicia -> getSaldoActual() . "\n";

    $galicia -> depositar(100);

    echo $galicia -> getSaldoActual() . "\n";

    $galicia -> retirar(50);

    echo $galicia -> getSaldoActual() . "\n";

    echo $galicia . "\n";

?>