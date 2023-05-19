<?php

    class ViajeInternacional extends Viaje {

        private $docAdicional;
        private $impuesto;

        public function __construct($destinoC, $horaPartidaC, $horaLlegadaC, $numC, $montoC, $fechaC, $asientosTotalesC, $asientosDisponiblesC, $objResponsableC, $docAdicionalC) {
            parent :: __construct($destinoC, $horaPartidaC, $horaLlegadaC, $numC, $montoC, $fechaC, $asientosTotalesC, $asientosDisponiblesC, $objResponsableC);
            $this -> docAdicional = $docAdicionalC;
            $this -> impuesto = 45;
        }

        public function getDocAdicional() {
            return $this -> docAdicional;
        }

        public function getImpuesto() {
            return $this -> impuesto;
        }

        public function setDocAdicional($docAdicionalNuevo) {
            $this -> docAdicional = $docAdicionalNuevo;
        }

        public function setImpuesto($impuestoNuevo) {
            $this -> impuesto = $impuestoNuevo;
        }

        public function calcularImporteViaje() {
            $importe = parent :: calcularImporteViaje();
            $importe = $importe + ($importe * ($this -> getImpuesto() / 100));
            return $importe;
        }

        public function stringDocAdicional() {
            $string = "";
            if ($this -> getDocAdicional() == true) {
                $string = "Si";
            } else {
                $string = "No";
            }
            return $string;
        }

        public function __toString() {
            $cadena = parent :: __toString();
            $cadena = $cadena . "\n" . "¿El viaje internacional requiere documentos adicionales?: " . $this -> stringDocAdicional() . 
            "\n" . "Impuesto del viaje internacional: " . $this -> getImpuesto() . "%";
            return $cadena;
        }

    }

?>