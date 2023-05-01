<?php

    include_once("ejercicio01_Persona.php");
    include_once("ejercicio01_Cliente.php");
    include_once("ejercicio02_CuentaBancaria.php");
    include_once("ejercicio02_CajaAhorro.php");
    include_once("ejercicio02_CuentaCorriente.php");
    include_once("ejercicio03-04_Banco.php");
    
    // 1 - Se crea un objeto de la clase Banco

    $banco = new Banco ([], [], 0, []);

    //echo $banco . "\n";

    // 2 - Se crean 2 nuevos objetos de la clase Cliente y se agrega al objeto $banco

    $cliente1 = new Cliente (11111111, "Fede", "Hache");
    $cliente2 = new Cliente (22222222, "Giany", "Ce");

    $banco -> incorporarCliente($cliente1);
    $banco -> incorporarCliente($cliente2);

    //echo $banco . "\n";

    // 3 - Se agregan al objeto $banco 2 nuevos objetos de la clase CuentaCorriente

    $banco -> incorporarCuentaCorriente(1, 100);
    $banco -> incorporarCuentaCorriente(2, 2000);

    //echo $banco . "\n";

    // 4 - Se agregan al objeto $banco 3 nuevos objetos de la clase CajaAhorro

    $banco -> incorporarCajaAhorro(1);
    $banco -> incorporarCajaAhorro(1);
    $banco -> incorporarCajaAhorro(2);

    //echo $banco . "\n";

    // 5 - Se deposita 300 en cada una de las cajas de ahorro

    $banco -> realizarDeposito(3, 300);
    $banco -> realizarDeposito(4, 300);
    $banco -> realizarDeposito(5, 300);

    //echo $banco . "\n";

    // 6 - Se transfieren 150 de la cuenta corriente del $cliente1 a la caja de ahorro del $cliente2

    if (($banco -> realizarRetiro(1, 150)) == true) {
        $banco -> realizarDeposito(5, 150);
    } else {
        echo "No se pudo realizar la transferencia." . "\n";
    }

    // 7 - Se muestran los datos de todas las cuentas en $banco

    echo $banco . "\n";

?>