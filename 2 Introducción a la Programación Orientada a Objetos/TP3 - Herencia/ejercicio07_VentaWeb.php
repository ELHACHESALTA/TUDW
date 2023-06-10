<?php

    class VentaWeb extends Venta {

        private static $descuento;

        public function __construct($fechaC, $objPaqueteTuristicoC, $cantPersonasC, $tipoDocClienteC, $numDocClienteC) {
            parent :: __construct($fechaC, $objPaqueteTuristicoC, $cantPersonasC, $tipoDocClienteC, $numDocClienteC, "Web");
            VentaWeb :: $descuento = 20;
        }

        public function getDescuento() {
            return VentaWeb :: $descuento;
        }

        public function setDescuento($descuentoNuevo) {
            VentaWeb :: $descuento = $descuentoNuevo;
        }

        public function darImporteVenta() {
            $paquete = $this -> getObjPaqueteTuristico();
            $destino = $paquete -> getDestino();
            $importeFinal = (($paquete -> getCantidadDias() * $destino -> getValor()) * $this -> getCantPersonas()) * $this -> getDescuento() / 100;
            return $importeFinal;
        }

        public function __toString() {
            $cadena = parent :: __toString();
            $cadena = $cadena . "\n" . "Descuento de la venta: " . $this -> getDescuento();
            return $cadena;
        }

    }

?>