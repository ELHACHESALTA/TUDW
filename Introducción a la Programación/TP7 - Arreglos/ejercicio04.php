<?php
    /**
     * a) Crea y retorna un arreglo bidimensional de arreglos asociativos dentro de un arreglo indexado con informacion de mis mascotas
     * @return array
     */
    function cargarMascotas () {
        /* array $misMascotasCM */
        $misMascotasCM = [];
        $misMascotasCM [0] = [
            "nombre" => "Gonzo",
            "edad" => 9,
            "tipo" => "perro"
        ];
        $misMascotasCM [1] = [
            "nombre" => "Peggy",
            "edad" => 3,
            "tipo" => "puerco"
        ];
        $misMascotasCM [2] = [
            "nombre" => "Harry",
            "edad" => 4,
            "tipo" => "hamster"
        ];
        $misMascotasCM [3] = [
            "nombre" => "Rudolf",
            "edad" => 2,
            "tipo" => "perro"
        ];
        return $misMascotasCM;
    }

    /**
     * b) Muestra los datos de mis mascotas a partir del arreglo ingresado
     * @param array $misMascotasMM
     */
    function mostrarMascotas ($misMascotasMM) {
        /* int $iMM, $jMM, string $mensajeMM */
        foreach($misMascotasMM as $key => $value) {
            echo "Mascota " . ($key + 1) . ": " . $value["nombre"] . " es " . $value ["tipo"] . " de " . $value["edad"] . " años.\n";
        }
    }

    /**
     * c) Busca y muestra la primera mascota del arreglo ingresado que tenga menor edad a la ingresada
     * @param array $misMascotasBPMA
     * @param int $edadMenorBPMA
     * @return string
     */
    function buscarPrimerMenorA ($misMascotasBPMA, $edadMenorBPMA) {
        /* int $nBPMA, $iBPMA, array $mascotaMenorBPMA, string $resultadoBPMA */
        $nBPMA = count($misMascotasBPMA);
        $iBPMA = 0;
        $mascotaMenorBPMA = [];
        if ($misMascotasBPMA[$iBPMA]["edad"] < $edadMenorBPMA) {
            $mascotaMenorBPMA["nombre"] = $misMascotasBPMA[$iBPMA]["nombre"];
            $mascotaMenorBPMA["edad"] = $misMascotasBPMA[$iBPMA]["edad"];
            $mascotaMenorBPMA["tipo"] = $misMascotasBPMA[$iBPMA]["tipo"];
        } else {
            do {
                $iBPMA = $iBPMA + 1;
                if ($misMascotasBPMA[$iBPMA]["edad"] < $edadMenorBPMA) {
                    $mascotaMenorBPMA["nombre"] = $misMascotasBPMA[$iBPMA]["nombre"];
                    $mascotaMenorBPMA["edad"] = $misMascotasBPMA[$iBPMA]["edad"];
                    $mascotaMenorBPMA["tipo"] = $misMascotasBPMA[$iBPMA]["tipo"];
                }
            } while ($iBPMA < ($nBPMA - 1) && $misMascotasBPMA[$iBPMA]["edad"] >= $edadMenorBPMA);
        }
        if (count($mascotaMenorBPMA) == 0) {
            $resultadoBPMA = "-1";
        } else {
            $resultadoBPMA = "La primer mascota con edad menor a la ingresada es: " . $mascotaMenorBPMA["nombre"] . ", " . $mascotaMenorBPMA["tipo"] . " de " . $mascotaMenorBPMA["edad"] . " años de edad.";
        }
        return $resultadoBPMA;
    }

    /* d) PROGRAMA Principal */
    /* Carga y muestra mis mascotas y busca y muestra la primera mascota con edad menor a la ingresada. */
    /* array $misMascotas, int edadMenor, string $mascotaMenor */
    echo "Se cargan las Mascotas. \n";
    $misMascotas = cargarMascotas();
    echo "\n";
    echo "Lista de Mascotas:\n";
    mostrarMascotas ($misMascotas);
    echo "\nIngrese una edad para buscar una mascota menor: ";
    $edadMenor = trim(fgets(STDIN));
    $mascotaMenor = buscarPrimerMenorA ($misMascotas, $edadMenor);
    if ($mascotaMenor == "-1") {
        echo "No se ha encontrado mascota de menor edad.";
    } else {
        echo $mascotaMenor;
    }
?>