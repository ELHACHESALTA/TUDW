<?php
    /* PROGRAMA Principal */
    /* Comprueba y muestra si una nota es suficiente para aprobar un exámen o no */
    /* int $nota */
    echo "Ingrese su nota: ";
    $nota = trim(fgets(STDIN));
    if (0 <= $nota && $nota <= 3) {
        echo "Usted ha desaprobado el exámen";
    } elseif (4 <= $nota && $nota <= 10) {
        echo "Usted ha aprobado el exámen";
    } else {
        echo "Nota inválida";
    }
?>