<?php

    include 'ejercicio01a - persona.php';
    include 'ejercicio07 - tramite.php';
    include 'ejercicio07 - cliente.php';
    include 'ejercicio07 - mostrador.php';
    include 'ejercicio07 - banco.php';

    //Creación de objetos de tipo Persona

    $persona1 = new Persona ("Fede1", "Hache1", "Hombre", "36498834");
    $persona2 = new Persona ("Fede2", "Hache2", "Hombre", "36498834");
    $persona3 = new Persona ("Fede3", "Hache3", "Hombre", "36498834");
    $persona4 = new Persona ("Fede4", "Hache4", "Hombre", "36498834");
    $persona5 = new Persona ("Fede5", "Hache5", "Hombre", "36498834");
    $persona6 = new Persona ("Fede6", "Hache6", "Hombre", "36498834");

    //Creación de objetos de tipo Tramite

    $tramite1 = new Tramite ("Extraccion", "12:01", "13:01", "23.04.2023", "23.04.2023", "abierto", $persona1);
    $tramite2 = new Tramite ("Extraccion", "12:02", "13:02", "23.04.2023", "23.04.2023", "abierto", $persona2);
    $tramite3 = new Tramite ("Extraccion", "12:03", "13:03", "23.04.2023", "23.04.2023", "abierto", $persona3);
    $tramite4 = new Tramite ("Extraccion", "12:04", "13:04", "23.05.2023", "23.05.2023", "abierto", $persona4);
    $tramite5 = new Tramite ("Extraccion", "12:05", "13:05", "23.05.2023", "23.05.2023", "abierto", $persona5);
    $tramite6 = new Tramite ("Extraccion", "12:06", "13:06", "23.05.2023", "23.05.2023", "abierto", $persona6);

    //Creación de objetos de tipo Cliente

    $cliente1 = new Cliente($tramite1);
    $cliente2 = new Cliente($tramite2);
    $cliente3 = new Cliente($tramite3);
    $cliente4 = new Cliente($tramite4);
    $cliente5 = new Cliente($tramite5);
    $cliente6 = new Cliente($tramite6);

    //Creación de objetos de tipo Mostrador

    $filaClientes = [];
    $filaTramites = [];

    $tipoTramiteMostrador1[0] = "Extraccion";
    $tipoTramiteMostrador1[1] = "Deposito";
    $tipoTramiteMostrador2[0] = "Deposito";
    $tipoTramiteMostrador2[1] = "Prestamo";
    $tipoTramiteMostrador3[0] = "Prestamo";
    $tipoTramiteMostrador3[1] = "Extraccion";

    $mostrador1 = new Mostrador ("Mostrador 1", $tipoTramiteMostrador1, 1, $filaClientes, $filaTramites);
    $mostrador2 = new Mostrador ("Mostrador 2", $tipoTramiteMostrador1, 2, $filaClientes, $filaTramites);
    $mostrador3 = new Mostrador ("Mostrador 3", $tipoTramiteMostrador2, 3, $filaClientes, $filaTramites);
    $mostrador4 = new Mostrador ("Mostrador 4", $tipoTramiteMostrador2, 4, $filaClientes, $filaTramites);
    $mostrador5 = new Mostrador ("Mostrador 5", $tipoTramiteMostrador3, 5, $filaClientes, $filaTramites);
    $mostrador6 = new Mostrador ("Mostrador 6", $tipoTramiteMostrador3, 6, $filaClientes, $filaTramites);

    //Creación de objetos de tipo Banco

    $arregloMostradores[0] = $mostrador1;
    $arregloMostradores[1] = $mostrador2;
    $arregloMostradores[2] = $mostrador3;
    $arregloMostradores[3] = $mostrador4;
    $arregloMostradores[4] = $mostrador5;
    $arregloMostradores[5] = $mostrador6;
    $banco1 = new Banco($arregloMostradores);

    //Se abren 6 trámites

    $banco1 -> atender($cliente1);
    $banco1 -> atender($cliente2);
    $banco1 -> atender($cliente3);
    $banco1 -> atender($cliente4);
    $banco1 -> atender($cliente5);
    $banco1 -> atender($cliente6);

    //Se cierran 3 trámites

    $banco1 -> getArregloMostradores()[1] -> cerrarTramite($cliente2 -> getObjTramite());
    $banco1 -> getArregloMostradores()[4] -> cerrarTramite($cliente3 -> getObjTramite());
    $banco1 -> getArregloMostradores()[4] -> cerrarTramite($cliente6 -> getObjTramite());

    echo "\n" . "Promedio de trámites resueltos por día en el més 04 en el mostrador 05: ";
    echo $banco1 -> getArregloMostradores()[4] -> cantTramitesAtendidosMes("04") . "\n";

    echo "\n" . "Porcentaje de trámites resueltos en total por el mostrador 02: ";
    echo $banco1 -> getArregloMostradores()[1] -> porcentajeTramitesResueltos();
    echo "% \n";

    echo "\n" . "Trámites abiertos por el cliente 4 son: ";
    $contador = 0;
    for ($i = 0; $i < count($banco1 -> getArregloMostradores()); $i++) {
        $contador = $contador + count($banco1 -> getArregloMostradores()[$i] -> cantTramitesAbiertos($persona4));
    }
    echo $contador . "\n";

    echo "\n" . "Trámites abiertos por el cliente 2 son: ";
    $contador = 0;
    for ($i = 0; $i < count($banco1 -> getArregloMostradores()); $i++) {
        $contador = $contador + count($banco1 -> getArregloMostradores()[$i] -> cantTramitesCerrados($persona2));
    }
    echo $contador . "\n";

    echo "\n" . "Promedio de tramites ingresados al banco por día en el mes: ";
    echo $banco1 -> promTramitesIngresadosDia() . "\n";

    echo "\n" . "Promedio de tramites cerrados en el banco por día en el mes: ";
    echo $banco1 -> promTramitesCerradosDia() . "\n";

    echo "\n" . "Mostrador con mayor porcentaje de tramites resueltos: ";
    echo $banco1 -> mostradorResuelveMasTramites() -> getNombreMostrador() . "\n";

?>