<?php

    include_once ("parcial1_2023_Cliente.php");
    include_once ("parcial1_2023_Bicicleta.php");
    include_once ("parcial1_2023_Venta.php");
    include_once ("parcial1_2023_Empresa.php");
    
    //1 - Se crean dos instancias de la clase Cliente

    $objCliente1 = new Cliente ("Fede", "Hache", false, "DNI", 36111111);
    $objCliente2 = new Cliente ("Andre", "Rojo", false, "LC", 36222222);

    //2 - Se crean tres instancias de la clase Bicicleta

    $objBici1 = new Bicicleta (11, 89500, 2022, "Fire Bird Plegable Cuadro Acero", 85, true);
    $objBici2 = new Bicicleta (12, 310000, 2021, "Bicicleta Trek Marlin 5 Rodado 29 Talle L", 70, true);
    $objBici3 = new Bicicleta (13, 10000, 2023, "Bicicleta Topmega Fixie Streeter R28 Acero 1vel Azul Osc T54", 55, false);

    //3 - Inciso 3 no existe

    //4 - Se crea una instancia del a clase Empresa

    $objEmpresa1 = new Empresa ("Alta Gama", "Av Argentina 123", [$objCliente1, $objCliente2], [$objBici1, $objBici2, $objBici3], []);

    //5 - Se invoca al método registrarVenta

    echo "\n" . "=== PRIMER VENTA ===";
    $venta1 = $objEmpresa1 -> registrarVenta([11, 12, 13], $objCliente2);
    if ($venta1 > 0) {
        echo "\n" . "La venta fue de: " . $venta1;
    } else {
        echo "\n" . "No se encontraron disponibles las bicicletas solicitadas por lo que no se realizó la venta.";
    }

    //6 - Se invoca al método registrarVenta

    echo "\n" . "=== SEGUNDA VENTA ===";
    $venta2 = $objEmpresa1 -> registrarVenta([0], $objCliente2);
    if ($venta2 > 0) {
        echo "\n" . "La venta fue de: " . $venta2;
    } else {
        echo "\n" . "No se encontraron disponibles las bicicletas solicitadas por lo que no se realizó la venta.";
    }

    //7 - Se invoca al método registrarVenta

    echo "\n" . "=== TERCER VENTA ===";
    $venta3 = $objEmpresa1 -> registrarVenta([2], $objCliente2);
    if ($venta3 > 0) {
        echo "\n" . "La venta fue de: " . $venta3;
    } else {
        echo "\n" . "No se encontraron disponibles las bicicletas solicitadas por lo que no se realizó la venta.";
    }

    //8 - Se invoca al método registrarVentaXCliente

    echo "\n" . "=== VENTAS DEL PRIMER CLIENTE ===" . "\n";
    print_r ($objEmpresa1 -> retornarVentasXCliente("DNI", 36111111));

    //9 - Se invoca al método registrarVentaXCliente
    
    echo "\n" . "=== VENTAS DEL SEGUNDO CLIENTE ===" . "\n";
    print_r ($objEmpresa1 -> retornarVentasXCliente("LC", 36222222));

    //10 - Se imprime la variable $objEmpresa1

    echo "\n" . "=== DATOS DE LA EMPRESA ===" . "\n";
    echo $objEmpresa1;

?>