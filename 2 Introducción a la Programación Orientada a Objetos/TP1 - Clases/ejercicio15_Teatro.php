<?php

    class Teatro {

        private $nombre;
        private $direccion;
        private $funciones;

        public function __construct($nombreC, $direccionC, $funcionesC) {
            $this -> nombre = $nombreC;
            $this -> direccion = $direccionC;
            $this -> funciones = $funcionesC;
        }

        public function getNombre() {
            return $this -> nombre;
        }

        public function getDireccion() {
            return $this -> direccion;
        }

        public function getFunciones() {
            return $this -> funciones;
        }

        public function setNombre($nombreNuevo) {
            $this -> nombre = $nombreNuevo;
        }

        public function setDireccion($direccionNueva) {
            $this -> direccion = $direccionNueva;
        }

        public function setFunciones($funcionesNuevo) {
            $this -> funciones = $funcionesNuevo;
        }

        public function __toString() {
            $cadena = "\n" . "Nombre del Teatro: " . $this -> getNombre() . 
            "\n" . "Direccion del Teatro: " . $this -> getDireccion() . 
            "\n" . "Primera Función: " . $this -> getFunciones()[0]["nombre"] . " - Precio: " .  $this -> getFunciones()[0]["precio"] . 
            "\n" . "Segunda Función: " . $this -> getFunciones()[1]["nombre"] . " - Precio: " .  $this -> getFunciones()[1]["precio"] . 
            "\n" . "Tercer Función: " . $this -> getFunciones()[2]["nombre"] . " - Precio: " .  $this -> getFunciones()[2]["precio"] . 
            "\n" . "Cuarta Función: " . $this -> getFunciones()[3]["nombre"] . " - Precio: " .  $this -> getFunciones()[3]["precio"];
            return $cadena;
        }

    }

?>