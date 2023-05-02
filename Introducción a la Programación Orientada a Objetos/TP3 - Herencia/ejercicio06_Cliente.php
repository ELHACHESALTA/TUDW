<?php

    class Cliente extends Persona {

        private static $nroContador = 1;
        private $nro;

        public function __construct($tipoDocC, $numDocC, $nombreC, $apellidoC) {
            parent :: __construct($tipoDocC, $numDocC, $nombreC, $apellidoC);
            $this -> nro = Cliente :: $nroContador++;
        }

        public function getNro() {
            return $this -> nro;
        }

        public function setNro() {
            $this -> nro;
        }

        public function __toString() {
            $cadena = parent::__toString();
            $cadena = $cadena . "\n" . "Número del cliente: " . $this -> getNro();
            return $cadena;
        }

    }

?>