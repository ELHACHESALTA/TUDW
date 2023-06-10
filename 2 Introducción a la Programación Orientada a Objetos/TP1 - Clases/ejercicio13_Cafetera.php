<?php

    class Cafetera {

        private $capacidadMaxima;
        private $cantidadActual;

        public function __construct($capacidadMaximaC, $cantidadActualC) {
            $this -> capacidadMaxima = $capacidadMaximaC;
            $this -> cantidadActual = $cantidadActualC;
        }

        public function getCapacidadMaxima() {
            return $this -> capacidadMaxima;
        }

        public function getCantidadActual() {
            return $this -> cantidadActual;
        }

        public function setCapacidadMaxima($capacidadMaximaNuevo) {
            $this -> capacidadMaxima = $capacidadMaximaNuevo;
        }

        public function setCantidadActual($cantidadActualNuevo) {
            $this -> cantidadActual = $cantidadActualNuevo;
        }

        public function llenarCafetera() {
            $this -> setCantidadActual($this -> getCapacidadMaxima());
        }

        public function servirTaza($cantidad) {
            $comprobacion = 1;
            if ($this -> getCantidadActual() >= $cantidad) {
                $this -> setCantidadActual($this -> getCantidadActual() - $cantidad);
            } elseif ($this -> getCantidadActual() != 0) {
                $this -> setCantidadActual(0);
                $comprobacion = -1;
            } else {
                $comprobacion = 0;
            }
            return $comprobacion;
        }

        public function vaciarCafetera() {
            $this -> setCantidadActual(0);
        }

        public function agregarCafe($cantidad) {
            $this -> setCantidadActual($this -> getCantidadActual() + $cantidad); 
        }

        public function __toString() {
            $cadena = "\n" . "Capacidad máxima de la cafetera: " . $this -> getCapacidadMaxima() . 
            "\n" . "Cantidad actual de la cafetera: " . $this -> getCantidadActual();
            return $cadena;
        }

    }

?>