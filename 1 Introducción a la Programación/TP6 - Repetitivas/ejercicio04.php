<?php
    /* PROGRAMA monoFrutero */
    /* string $hayFruta, $gruta, int $cantBananas, $cantOtras */
    $cantBananas = 0;
    $cantOtras = 0;
    do {
        echo "Qué fruta comió(b=Banana, o=otra)?: ";
        $fruta = trim(fgets(STDIN));
        if ($fruta == "b") {
            $cantBananas = $cantBananas + 1;
        } else {
            $cantOtras = $cantOtras + 1;
        }
        echo "hay más frutas?(s/n): ";
        $hayFruta = trim(fgets(STDIN));
    }  while ($hayFruta == "s");
    echo "El mono comió " . $cantBananas . " Bananas y " . $cantOtras . " de otras frutas.";
?>