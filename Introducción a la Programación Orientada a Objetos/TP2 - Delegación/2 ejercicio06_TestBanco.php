<?php

    include 'ejercicio01a - persona.php';
    include 'ejercicio06 - tramite.php';
    include 'ejercicio06 - cliente.php';
    include 'ejercicio06 - mostrador.php';
    include 'ejercicio06 - banco.php';

    //Creación de objetos de tipo Persona

    $persona1 = new Persona ("Fede1", "Hache1", "Hombre", "36498834");
    $persona2 = new Persona ("Fede2", "Hache2", "Hombre", "36498834");
    $persona3 = new Persona ("Fede3", "Hache3", "Hombre", "36498834");
    $persona4 = new Persona ("Fede4", "Hache4", "Hombre", "36498834");
    $persona5 = new Persona ("Fede5", "Hache5", "Hombre", "36498834");
    $persona6 = new Persona ("Fede6", "Hache6", "Hombre", "36498834");

    //Creación de objetos de tipo Tramite

    $tramite1 = new Tramite ("Extraccion", "12:01", "13:01");
    $tramite2 = new Tramite ("Extraccion", "12:02", "13:02");
    $tramite3 = new Tramite ("Extraccion", "12:03", "13:03");
    $tramite4 = new Tramite ("Extraccion", "12:04", "13:04");
    $tramite5 = new Tramite ("Extraccion", "12:05", "13:05");
    $tramite6 = new Tramite ("Extraccion", "12:06", "13:06");

    //Creación de objetos de tipo Cliente

    $cliente1 = new Cliente($persona1, $tramite1);
    $cliente2 = new Cliente($persona2, $tramite2);
    $cliente3 = new Cliente($persona3, $tramite3);
    $cliente4 = new Cliente($persona4, $tramite4);
    $cliente5 = new Cliente($persona5, $tramite5);
    $cliente6 = new Cliente($persona6, $tramite6);

    //Creación de objetos de tipo Mostrador

    $filaClientes = [];

    $tipoTramiteMostrador1[0] = "Extraccion";
    $tipoTramiteMostrador1[1] = "Deposito";
    $tipoTramiteMostrador2[0] = "Deposito";
    $tipoTramiteMostrador2[1] = "Prestamo";
    $tipoTramiteMostrador3[0] = "Prestamo";

    $mostrador1 = new Mostrador ("Mostrador 1", $tipoTramiteMostrador1, 1, $filaClientes);
    $mostrador2 = new Mostrador ("Mostrador 2", $tipoTramiteMostrador1, 2, $filaClientes);
    $mostrador3 = new Mostrador ("Mostrador 3", $tipoTramiteMostrador2, 3, $filaClientes);
    $mostrador4 = new Mostrador ("Mostrador 4", $tipoTramiteMostrador2, 4, $filaClientes);
    $mostrador5 = new Mostrador ("Mostrador 5", $tipoTramiteMostrador3, 5, $filaClientes);
    $mostrador6 = new Mostrador ("Mostrador 6", $tipoTramiteMostrador3, 6, $filaClientes);

    //Creación de objetos de tipo Banco

    $arregloMostradores[0] = $mostrador1;
    $arregloMostradores[1] = $mostrador2;
    $arregloMostradores[2] = $mostrador3;
    $arregloMostradores[3] = $mostrador4;
    $arregloMostradores[4] = $mostrador5;
    $arregloMostradores[5] = $mostrador6;
    $banco1 = new Banco($arregloMostradores);

    //Prueba de funciones de objetos de tipo Banco

    echo "El cliente 1 ";
    if ($banco1 -> atender($cliente1) == true) {
        echo "se asignó a un mostrador. \n";
    } else {
        echo "será atendido en cuanto haya lugar en un mostrador. \n";
    };
    echo "El cliente 2 ";
    if ($banco1 -> atender($cliente2) == true) {
        echo "se asignó a un mostrador. \n";
    } else {
        echo "será atendido en cuanto haya lugar en un mostrador. \n";
    };
    echo "El cliente 3 ";
    if ($banco1 -> atender($cliente3) == true) {
        echo "se asignó a un mostrador. \n";
    } else {
        echo "será atendido en cuanto haya lugar en un mostrador. \n";
    };
    echo "El cliente 4 ";
    if ($banco1 -> atender($cliente4) == true) {
        echo "se asignó a un mostrador. \n";
    } else {
        echo "será atendido en cuanto haya lugar en un mostrador. \n";
    };
    echo "El cliente 5 ";
    if ($banco1 -> atender($cliente5) == true) {
        echo "se asignó a un mostrador. \n";
    } else {
        echo "será atendido en cuanto haya lugar en un mostrador. \n";
    };
    echo "El cliente 6 ";
    if ($banco1 -> atender($cliente6) == true) {
        echo "se asignó a un mostrador. \n";
    } else {
        echo "será atendido en cuanto haya lugar en un mostrador. \n";
    };

    echo $banco1;

?>