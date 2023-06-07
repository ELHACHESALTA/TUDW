<?php

    include_once ("Cliente.php");
    include_once ("Bicicleta.php");
    include_once ("BicicletaImportada.php");
    include_once ("BicicletaNacional.php");
    include_once ("Venta.php");
    include_once ("Empresa.php");
    
    //1 - Se crean dos instancias de la clase Cliente

    $objCliente1 = new Cliente ("Fede", "Hache", false, "DNI", 36111111);
    $objCliente2 = new Cliente ("Andre", "Rojo", false, "LC", 36222222);

    //2 - Se crean tres instancias de la clase BicicletaNacional y una instancia de la clase BicicletaImportada

    $objBici1 = new BicicletaNacional (11, 89500, 2022, "Fire Bird Plegable Cuadro Acero", 85, true, 11);                                   //165.575       147.361,75
    $objBici2 = new BicicletaNacional (12, 310000, 2021, "Bicicleta Trek Marlin 5 Rodado 29 Talle L", 70, true, 12);                        //744.000       654.720
    $objBici3 = new BicicletaNacional (13, 10000, 2023, "Bicicleta Topmega Fixie Streeter R28 Acero 1vel Azul Osc T54", 55, false, null);
    $objBici4 = new BicicletaImportada (14, 12499900, 2020, "Bicicleta Vairo Xr 3.8 D 29", 100, true, "EEUU", 6244400);                     //49.999.600    56.244.000
                                                                                                                                            //TOTAL    =    57.046.081,75
                                                                                                                                            //TOTAL NAC  =  802.081,75
    //3 - Se crea una instancia del a clase Empresa

    $objEmpresa1 = new Empresa ("Alta Gama", "Av Argentina 123", [$objCliente1, $objCliente2], [$objBici1, $objBici2, $objBici3, $objBici4], []);

    //4 - Se invoca al método registrarVenta

    echo "\n" . "====== PRIMER VENTA ======";
    $venta1 = $objEmpresa1 -> registrarVenta([11, 12, 13, 14], $objCliente2);
    if ($venta1 > 0) {
        echo "\n" . "La venta fue de: " . $venta1;
    } else {
        echo "\n" . "No se encontraron disponibles las bicicletas solicitadas por lo que no se realizó la venta.";
    }
    echo "\n";

    //5 - Se invoca al método registrarVenta

    echo "\n" . "====== SEGUNDA VENTA ======";
    $venta2 = $objEmpresa1 -> registrarVenta([0, 14], $objCliente2);
    if ($venta2 > 0) {
        echo "\n" . "La venta fue de: " . $venta2;
    } else {
        echo "\n" . "No se encontraron disponibles las bicicletas solicitadas por lo que no se realizó la venta.";
    }
    echo "\n";

    //6 - Se invoca al método registrarVenta

    echo "\n" . "====== TERCER VENTA ======";
    $venta3 = $objEmpresa1 -> registrarVenta([2, 14], $objCliente2);
    if ($venta3 > 0) {
        echo "\n" . "La venta fue de: " . $venta3;
    } else {
        echo "\n" . "No se encontraron disponibles las bicicletas solicitadas por lo que no se realizó la venta.";
    }
    echo "\n";

    //7 - Se invoca al método informarVentasImportadas

    echo "\n" . "====== COLECCIÓN DE VENTAS IMPORTADAS ======" . "\n";
    print_r ($objEmpresa1 -> informarVentasImportadas());

    //8 - Se invoca al método informarSumaVentasNacionales

    echo "\n" . "====== SUMA DE VENTAS NACIONALES ======";

    echo "\n" . "El total de ventas nacionales acumula un valor de: " . $objEmpresa1 -> informarSumaVentasNacionales() . "\n";

    //9 - Se imprime la variable $objEmpresa1

    echo "\n" . "====== DATOS DE LA EMPRESA ======";
    echo $objEmpresa1;

?>