<?php
    /* Imprime en pantalla el plano de una cancha de futbol */
    function caños() {
        echo ("+----+              |               +----+" . "\n");
    }

    function campo() {
        echo ("|                   |                    |" . "\n");
    }

    function lineaMedia() {
        echo ("|    |              |               |    |" . "\n");
    }

    function lineaDeBanda() {
        echo ("+-------------------+--------------------+" . "\n");
    }

    lineaDeBanda();
    campo();
    campo();
    caños();
    lineaMedia();
    lineaMedia();
    lineaMedia();
    lineaMedia();
    caños();
    campo();
    campo();
    lineaDeBanda();
?>