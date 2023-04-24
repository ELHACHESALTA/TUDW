<?php
    include_once ("ejercicio01b_CuentaBancaria.php");
    include_once ("ejercicio01a_Persona.php");

    $persona1 = new Persona("Fede", "Hache", "Hombre", 19182833);

    $galicia = new CuentaBancaria(1, $persona1, 1000, 365);

    echo $galicia -> getSaldoActual() . "\n";

    $galicia -> actualizarSaldo();

    echo $galicia -> getSaldoActual() . "\n";

    $galicia -> depositar(100);

    echo $galicia -> getSaldoActual() . "\n";

    $galicia -> retirar(50);

    echo $galicia -> getSaldoActual() . "\n";

    echo $galicia . "\n";

?>