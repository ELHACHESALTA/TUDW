<?php

    include 'ejercicio06 - cliente.php';
    include 'ejercicio06 - mostrador.php';
    include 'ejercicio06 - banco.php';

    //Creación de objetos de tipo Cliente

    $cliente1 = new Cliente("Extraccion", "Fede1", "Hache1", "36534857");
    $cliente2 = new Cliente("Extraccion", "Fede2", "Hache2", "36534857");
    $cliente3 = new Cliente("Extraccion", "Fede3", "Hache3", "36534857");
    $cliente4 = new Cliente("Extraccion", "Fede3", "Hache3", "36534857");

    //Creación de objetos de tipo Mostrador

    $filaClientes = [];
    $mostrador1 = new Mostrador ("Mostrador 1", "Extraccion", 1, $filaClientes);
    $mostrador2 = new Mostrador ("Mostrador 2", "Extraccion", 2, $filaClientes);
    $mostrador3 = new Mostrador ("Mostrador 3", "Deposito", 3, $filaClientes);
    $mostrador4 = new Mostrador ("Mostrador 4", "Deposito", 4, $filaClientes);
    $mostrador5 = new Mostrador ("Mostrador 5", "Prestamo", 5, $filaClientes);
    $mostrador6 = new Mostrador ("Mostrador 6", "Prestamo", 6, $filaClientes);

    //Creación de objetos de tipo Banco

    $arregloMostradores[0] = $mostrador1;
    $arregloMostradores[1] = $mostrador2;
    $arregloMostradores[2] = $mostrador3;
    $arregloMostradores[3] = $mostrador4;
    $arregloMostradores[4] = $mostrador5;
    $arregloMostradores[5] = $mostrador6;
    $banco1 = new Banco($arregloMostradores);

    //Prueba de funciones de objetos de tipo Mostrador

        //echo $mostrador1 -> atiende($cliente1 -> getTipoTramiteCliente());
        
        //echo $mostrador1 -> esTramite("Presta", $banco1);

    //Prueba de funciones de objetos de tipo Banco

        //print_r ($banco1 -> getArregloMostradores());
    
        //echo $banco1;

        //print_r ($banco1 -> mostradoresQueAtienden("Extraccion"));

        //print_r ($banco1 -> mejorMostradorPara("Extraccion"));

        echo "\n" . "Se carga el cliente 1. \n";
        echo $banco1 -> atender($cliente1);
        echo "\n" . "Se carga el cliente 2. \n";
        echo $banco1 -> atender($cliente2);
        echo "\n" . "Se carga el cliente 3. \n";
        echo $banco1 -> atender($cliente3);
        echo "\n" . "Se carga el cliente 4. \n";
        echo $banco1 -> atender($cliente4);

        echo $banco1;

?>