<?php

    class PaqueteTuristico {

        private $fecha;
        private $cantidadDias;
        private $destino;
        private $asientosTotales;
        private $asientosDisponibles;

        public function __construct($fechaC, $cantidadDiasC, $destinoC, $asientosTotalesC) {
            $this -> fecha = $fechaC;
            $this -> cantidadDias = $cantidadDiasC;
            $this -> destino = $destinoC;
            $this -> asientosTotales = $asientosTotalesC;
            $this -> asientosDisponibles = $asientosTotalesC;
        }

        public function getFecha() {
            return $this -> fecha;
        }

        public function getCantidadDias() {
            return $this -> cantidadDias;
        }

        public function getDestino() {
            return $this -> destino;
        }

        public function getAsientosTotales() {
            return $this -> asientosTotales;
        }

        public function getAsientosDisponibles() {
            return $this -> asientosDisponibles;
        }

        public function setFecha($fechaNuevo) {
            $this -> fecha = $fechaNuevo;
        }

        public function setCantidadDias($cantidadDiasNuevo) {
            $this -> cantidadDias = $cantidadDiasNuevo;
        }

        public function setDestino($destinoNuevo) {
            $this -> destino = $destinoNuevo;
        }

        public function setAsientosTotales($asientosTotalesNuevo) {
            $this -> asientosTotales = $asientosTotalesNuevo;
        }

        public function setAsientosDisponibles($asientosDisponiblesNuevo) {
            $this -> asientosDisponibles = $asientosDisponiblesNuevo;
        }

        public function __toString() {
            $cadena = "\n" . "Fecha del paquete turístico: " . $this -> getFecha() . 
            "\n" . "Cantidad de días del paquete turístico: " . $this -> getCantidadDias() . 
            "\n" . "Destino del paquete turístico: " . $this -> getDestino() . 
            "\n" . "Asientos totales del paquete turístico: " . $this -> getAsientosTotales() . 
            "\n" . "Asientos disponible del paquete turístico: " . $this -> getAsientosDisponibles();
            return $cadena;
        }

    }

?>