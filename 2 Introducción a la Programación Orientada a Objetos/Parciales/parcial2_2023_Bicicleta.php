<?php

    class Bicicleta {

        private $codigo;
        private $costo;
        private $anioFabricacion;
        private $descripcion;
        private $porcentajeIncrementoAnual;
        private $activa;

        public function __construct($codigoC, $costoC, $anioFabricacionC, $descripcionC, $porcentajeIncrementoAnualC, $activaC) {
            $this -> codigo = $codigoC;
            $this -> costo = $costoC;
            $this -> anioFabricacion = $anioFabricacionC;
            $this -> descripcion = $descripcionC;
            $this -> porcentajeIncrementoAnual = $porcentajeIncrementoAnualC;
            $this -> activa = $activaC;
        }

        public function getCodigo() {
            return $this -> codigo;
        }

        public function getCosto() {
            return $this -> costo;
        }

        public function getAnioFabricacion() {
            return $this -> anioFabricacion;
        }

        public function getDescripcion() {
            return $this -> descripcion;
        }

        public function getPorcentajeIncrementoAnual() {
            return $this -> porcentajeIncrementoAnual;
        }

        public function getActiva() {
            return $this -> activa;
        }

        public function setCodigo($codigoNuevo) {
            $this -> codigo = $codigoNuevo;
        }

        public function setCosto($costoNuevo) {
            $this -> costo = $costoNuevo;
        }

        public function setAnioFabricacion($anioFabricacionNuevo) {
            $this -> anioFabricacion = $anioFabricacionNuevo;
        }

        public function setDescripcion($descripcionNuevo) {
            $this -> descripcion = $descripcionNuevo;
        }

        public function setPorcentajeIncrementoAnual($porcentajeIncrementoAnualNuevo) {
            $this -> porcentajeIncrementoAnual = $porcentajeIncrementoAnualNuevo;
        }

        public function setActiva($activaNuevo) {
            $this -> activa = $activaNuevo;
        }

        public function darPrecioVenta() {
            if ($this -> getActiva() == true) {
                $precioVenta = $this -> getCosto() + ($this -> getCosto() * ((date("Y") - $this -> getAnioFabricacion()) * ($this -> getPorcentajeIncrementoAnual()/100)));
            } else {
                $precioVenta = -1;
            }
            return $precioVenta;
        }

        public function stringActiva() {
            if ($this -> getActiva() == true) {
                $string = "Si";
            } else {
                $string = "No";
            }
            return $string;
        }

        public function __toString() {
            $cadena = "\n" . "Código de la bicicleta: " . $this -> getCodigo() . 
            "\n" . "Costo de la bicicleta: " . $this -> getCosto() . 
            "\n" . "Año de fabricación de la bicicleta: " . $this -> getAnioFabricacion() . 
            "\n" . "Descripción de la bibicleta: " . $this -> getDescripcion() . 
            "\n" . "Porcentaje de incremento anual de la bicicleta: " . $this -> getPorcentajeIncrementoAnual() . "%" . 
            "\n" . "¿Está disponible para la venta?: " . $this -> stringActiva();
            return $cadena;
        }

    }

?>