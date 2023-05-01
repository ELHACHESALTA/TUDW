<?php

    class CajaAhorro extends CuentaBancaria {

        public function __construct ($numeroCuentaC, $saldoC, $objDuenioC) {
            parent::__construct($numeroCuentaC, $saldoC, $objDuenioC);
        }

        public function __toString() {
            $cadena = parent::__toString();
            return $cadena;
        }

    }

?>