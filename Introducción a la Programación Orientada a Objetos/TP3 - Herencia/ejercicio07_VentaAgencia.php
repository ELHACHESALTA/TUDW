<?php

    class VentaAgencia extends Venta {

        public function __construct($fechaC, $objPaqueteTuristicoC, $cantPersonasC, $tipoDocClienteC, $numDocClienteC) {
            parent :: __construct($fechaC, $objPaqueteTuristicoC, $cantPersonasC, $tipoDocClienteC, $numDocClienteC, "Agencia");
        }

        public function darImporteVenta() {
            $paquete = $this -> getObjPaqueteTuristico();
            $destino = $paquete -> getDestino();
            $importeFinal = ($paquete -> getCantidadDias() * $destino -> getValor()) * $this -> getCantPersonas();
            return $importeFinal;
        }

        public function __toString() {
            $cadena = parent :: __toString();
            return $cadena;
        }

    }

?>