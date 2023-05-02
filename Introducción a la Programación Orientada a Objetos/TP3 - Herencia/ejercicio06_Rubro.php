<?php

    class Rubro {

        private $nombre;
        private $porcentajeGanancia;

        public function __construct($nombreC, $porcentajeGananciaC) {
            $this -> nombre = $nombreC;
            $this -> porcentajeGanancia = $porcentajeGananciaC;
        }

        public function getNombre() {
            return $this -> nombre;
        }

        public function getPorcentajeGanancia() {
            return $this -> porcentajeGanancia;
        }

        public function setNombre($nombreNuevo) {
            return $this -> nombre = $nombreNuevo;
        }

        public function setPorcentajeGanancia($porcentajeGananciaNuevo) {
            $this -> porcentajeGanancia = $porcentajeGananciaNuevo;
        }

        public function __toString() {
            $cadena = "\n" . "Nombre del rubro: " . $this -> getNombre() . 
            "\n" . "Porcentaje de ganancia del rubro: " . $this -> getPorcentajeGanancia();
            return $cadena;
        }

    }

?>