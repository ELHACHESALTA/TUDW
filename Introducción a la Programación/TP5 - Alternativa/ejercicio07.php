<?php
    /**
    * Modulo que calcula el valor del alquiler según los km recorridos por un vehiculo
    * @param int $distancia;
    * @return float
    */
    function calculoAlquiler ($distancia) {
        /* float $montoACobrar, $excesoMil */
        if ($distancia <= 300) {
            $montoACobrar = 850;
        } elseif ($distancia > 300 && $distancia <= 1000) {
            $montoACobrar = 850 + (10.5 * ($distancia - 300));
        } else {
            $excesoMil = $distancia - 1000;
            $montoACobrar = 850 + (10.5 * 700) + ($excesoMil * 8.5);
        }
        return $montoACobrar;
    }

    /**
    * Modulo que calcula el valor del iva con respecto al precio del alquiler de un vehiculo
    * @param float $valorAlquilerTotal
    * @return float
    */
    function calculoImpuesto ($valorAlquilerTotal){
        /* float $impuestoTotal */
        $impuestoTotal = $valorAlquilerTotal * 0.21;
        return $impuestoTotal;
    }

    /* PROGRAMA principal */
    /* Programa que pide el ingreso de los km recorridos y muestra el valor del alquiler e IVA */
    /* int $kmRecorridos */
    /* float $impuestoACobrar, $valorAlquilerSolo, $precioTotal */
    echo "Ingrese los km recorridos con el vehiculo: ";
    $kmRecorridos = trim(fgets(STDIN));
    $precioTotal = calculoAlquiler($kmRecorridos);
    $impuestoACobrar = calculoImpuesto($precioTotal);
    $valorAlquilerSolo = $precioTotal - $impuestoACobrar;
    echo "El valor del alquiler del auto es: $" . $valorAlquilerSolo . " y el valor del IVA es: $" . $impuestoACobrar . "\n";
    echo "El valor en total es: $" . $precioTotal;
?>