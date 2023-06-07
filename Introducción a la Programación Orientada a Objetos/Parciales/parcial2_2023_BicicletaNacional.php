<?php

    class BicicletaNacional extends Bicicleta {

        private $porcentajeDescuento;

        public function __construct($codigoC, $costoC, $anioFabricacionC, $descripcionC, $porcentajeIncrementoAnualC, $activaC, $porcentajeDescuentoC) {
            parent :: __construct($codigoC, $costoC, $anioFabricacionC, $descripcionC, $porcentajeIncrementoAnualC, $activaC);
            if($porcentajeDescuentoC == null) {
                $this -> porcentajeDescuento = 15;
            } else {
                $this -> porcentajeDescuento = $porcentajeDescuentoC;
            }
        }

        public function getPorcentajeDescuento() {
            return $this -> porcentajeDescuento;
        }

        public function setPorcentajeDescuento($porcentajeDescuentoNuevo) {
            $this -> porcentajeDescuento = $porcentajeDescuentoNuevo;
        }

        public function darPrecioVenta() {
            $precioVenta = parent :: darPrecioVenta();
            $descuento = $this -> getPorcentajeDescuento();
            if ($precioVenta >= 0) {
                $precioVenta = $precioVenta - ($precioVenta * $descuento / 100);
            }
            return $precioVenta;
        }

        public function __toString() {
            $cadena = parent :: __toString();
            $cadena = $cadena . "\n" . "Porcentaje de descuento de la bicicleta: " . $this -> getPorcentajeDescuento();
            return $cadena;
        }

    }

?>