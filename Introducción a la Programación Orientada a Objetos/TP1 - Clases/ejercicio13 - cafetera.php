<?php

    class Cafetera {

        private $capacidadMaxima;
        private $cantidadActual;

        public function __construct() {
            $this -> capacidadMaxima = 100;
            $this -> cantidadActual = 0;
        }

        public function getCapacidadMaxima() {
            return $this -> capacidadMaxima;
        }

        public function getCantidadActual() {
            return $this -> cantidadActual;
        }

        public function setCapacidadMaxima($capacidadMaximaNueva) {
            $this -> capacidadMaxima = $capacidadMaximaNueva;
        }

        public function setCantidadActual($cantidadActualNueva) {
            $this -> cantidadActual = $cantidadActualNueva;
        }

        public function llenarCafetera() {
            $this -> setCantidadActual($this -> getCapacidadMaxima());
        }

        public function servirTaza($cantidad) {
            if ($this -> getCantidadActual() >= $cantidad) {
                $this -> setCantidadActual($this -> getCantidadActual() - $cantidad);
            } elseif ($this -> getCantidadActual() != 0) {
                $this -> setCantidadActual(0);
                echo "No se llego a llenar la ultima taza con suficiente cafe. Recargue la cafetera. \n";
            } else {
                echo "No queda más cafe para llenar otra taza. Recargue la cafetera. \n";
            }
            
        }

        public function vaciarCafetera() {
            $this -> setCantidadActual(0);
        }

        public function agregarCafe($cantidad) {
            $this -> setCantidadActual($this -> getCantidadActual() + $cantidad); 
        }

        public function __toString() {
            return "(" . $this -> getCapacidadMaxima() . "," . $this -> getCantidadActual() . ")";
        }

    }

?>