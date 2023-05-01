<?php

    class Persona {

        private $dni;
        private $nombre;
        private $apellido;

        public function __construct ($dniC, $nombreC, $apellidoC) {
            $this -> dni = $dniC;
            $this -> nombre = $nombreC;
            $this -> apellido = $apellidoC;
        }

        public function getDni() {
            return $this -> dni;
        }

        public function getNombre() {
            return $this -> nombre;
        }

        public function getApellido() {
            return $this -> apellido;
        }

        public function setDni($dniNuevo) {
            $this -> dni = $dniNuevo;
        }

        public function setNombre($nombreNuevo) {
            $this -> nombre = $nombreNuevo;
        }

        public function setApellido($apellidoNuevo) {
            $this -> apellido = $apellidoNuevo;
        }

        public function __toString() {
            $cadena = "\n" . "DNI de la persona: " . $this -> getDni() . 
            "\n" . "Nombre de la persona: " . $this -> getNombre() . 
            "\n" . "Apellido de la persona: " . $this -> getApellido();
            return $cadena;
        }

    }

?>