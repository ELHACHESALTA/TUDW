<?php
    /* Imprime en pantalla el plano de una cancha de tenis */
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
    lineaDeBanda();
    lineaMedia();
    lineaMedia();
    lineaMedia();
    lineaDeBanda();
    lineaMedia();
    lineaMedia();
    lineaMedia();
    lineaDeBanda();
    campo();
    lineaDeBanda();
?>