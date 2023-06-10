<?php

    include_once("ejercicio07_Destino.php");
    include_once("ejercicio07_PaqueteTuristico.php");
    include_once("ejercicio07_Venta.php");
    include_once("ejercicio07_VentaAgencia.php");
    include_once("ejercicio07_VentaWeb.php");
    include_once("ejercicio07_Agencia.php");

    // Se crea una instancia de la clase Destino

    $destino = new Destino(1, "Bariloche", 250);

    // Se crea una instancia de la clase Paquete Turistico

    $paquete = new PaqueteTuristico("23/05/2014", 3, $destino, 25);

    // Se crea una instancia de la clase Agencia

    $agencia = new Agencia([], [], []);

    // Se invoca el método incorporarPaquete de la Agencia
    
    if ($agencia -> incorporarPaquete($paquete) == true) {
        echo "Se incorporo el paquete correctamente a la agencia." . "\n";
    } else {
        echo "No se pudo incorporar el paquete a la agencia." . "\n";
    }

    // Se invoca nuevamente el método incorporarPaquete de la Agencia

    if ($agencia -> incorporarPaquete($paquete) == true) {
        echo "Se incorporo el paquete correctamente a la agencia." . "\n";
    } else {
        echo "No se pudo incorporar el paquete a la agencia." . "\n";
    }

    // Se invoca el método incorporarVenta de la Agencia

    $importeFinal = $agencia -> incorporarVenta($paquete, "dni", 27898654, 5, true);
    if ($importeFinal == -1) {
        echo "No se pudo incorporar la venta" . "\n";
    } else {
        echo "La venta se incorporo correctamente con el valor de: " . $importeFinal . ".\n";
    }

    // Se invoca nuevamente el método incorporarVenta de la Agencia

    $importeFinal = $agencia -> incorporarVenta($paquete, "dni", 27898654, 4, true);
    if ($importeFinal == -1) {
        echo "No se pudo incorporar la venta" . "\n";
    } else {
        echo "La venta se incorporo correctamente con el valor de: " . $importeFinal . ".\n";
    }

    // Se invoca nuevamente el método incorporarVenta de la Agencia

    $importeFinal = $agencia -> incorporarVenta($paquete, "dni", 27898654, 17, true);
    if ($importeFinal == -1) {
        echo "No se pudo incorporar la venta" . "\n";
    } else {
        echo "La venta se incorporo correctamente con el valor de: " . $importeFinal . ".\n";
    }

?>