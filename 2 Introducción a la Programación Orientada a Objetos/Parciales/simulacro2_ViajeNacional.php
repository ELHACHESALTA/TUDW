<?php

    class ViajeNacional extends Viaje {

        private $descuento;

        public function __construct($destinoC, $horaPartidaC, $horaLlegadaC, $numC, $montoC, $fechaC, $asientosTotalesC, $asientosDisponiblesC, $objResponsableC) {
            parent :: __construct($destinoC, $horaPartidaC, $horaLlegadaC, $numC, $montoC, $fechaC, $asientosTotalesC, $asientosDisponiblesC, $objResponsableC);
            $this -> descuento = 10;
        }

        public function getDescuento() {
            return $this -> descuento;
        }

        public function setDescuento($descuentoNuevo) {
            $this -> descuento = $descuentoNuevo;
        }

        public function calcularImporteViaje() {
            $importe = parent :: calcularImporteViaje();
            $importe = $importe - ($importe * ($this -> getDescuento() / 100));
            return $importe;
        }

        public function __toString() {
            $cadena = parent :: __toString();
            $cadena = $cadena . "\n" . "Descuento del viaje nacional: " . $this -> getDescuento();
            return $cadena;
        }

    }

?>