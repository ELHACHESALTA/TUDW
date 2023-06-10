<?php
    /**
    * Comprueba si la persona cumple con las condiciones requeridas por la empresa o no
    * @param int $sexoSelec
    * @param int $edadSelec
    * @param int $secundarioSelec
    * @return boolean
    */
    function seleccionPersonal ( int $sexoSelec, $edadSelec, $secundarioSelec ) {
        /* boolean $resultado */
        if ( ( $sexoSelec == 1 && $edadSelec < 25 && $secundarioSelec == 1 ) || ( $sexoSelec == 2 && ($edadSelec >= 30 || $edadSelec <= 40) && $secundarioSelec == 1 ) ) {
            $resultado = true;
        } else {
            $resultado = false;
        }
        return $resultado;
    }

    /* PROGRAMA Principal */
    /* Selecciona el personal según las condiciones requeridas por la empresa */
    /* int $sexo, $edad, $secundario string $comprobacion */
    echo "Ingrese el sexo del postulante: " . "\n";
    echo "Hombre: 1" . "\n";
    echo "Mujer: 2" . "\n";
    $sexo = trim(fgets(STDIN));
    echo "Ingrese la edad del postulante: " . "\n";
    $edad = trim(fgets(STDIN));
    echo "¿El postulante tiene secundario completo?: " . "\n";
    echo "Si: 1" . "\n";
    echo "No: 2" . "\n";
    $secundario = trim(fgets(STDIN));
    if (seleccionPersonal($sexo, $edad, $secundario) == true) {
        $comprobacion = "La persona queda seleccionada";
    } else {
        $comprobacion ="La persona no cumple los requisitos";
    }
    echo $comprobacion;
?>