<?php

    class BicicletaImportada extends Bicicleta {

        private $paisImportacion;
        private $impuestoImportacion;

        public function __construct($codigoC, $costoC, $anioFabricacionC, $descripcionC, $porcentajeIncrementoAnualC, $activaC, $paisImportacionC, $impuestoImportacionC) {
            parent :: __construct($codigoC, $costoC, $anioFabricacionC, $descripcionC, $porcentajeIncrementoAnualC, $activaC);
            $this -> paisImportacion = $paisImportacionC;
            $this -> impuestoImportacion = $impuestoImportacionC;
        }

        public function getPaisImportacion() {
            return $this -> paisImportacion;
        }

        public function getImpuestoImportacion() {
            return $this -> impuestoImportacion;
        }

        public function setPaisImportacion($paisImportacionNuevo) {
            $this -> paisImportacion = $paisImportacionNuevo;
        }

        public function setImpuestoImportacion($impuestoImportacionNuevo) {
            $this -> impuestoImportacion = $impuestoImportacionNuevo;
        }

        public function darPrecioVenta() {
            $precioVenta = parent :: darPrecioVenta();
            $impuesto = $this -> getImpuestoImportacion();
            if ($precioVenta >= 0) {
                $precioVenta = $precioVenta + $impuesto;
            }
            return $precioVenta;
        }

        public function __toString() {
            $cadena = parent :: __toString();
            $cadena = $cadena . "\n" . "País de importacion de la bicicleta: " . $this -> getPaisImportacion() . 
            "\n" . "Impuesto de importacion de la bicicleta: " . $this -> getImpuestoImportacion();
            return $cadena;
        }

    }

?>