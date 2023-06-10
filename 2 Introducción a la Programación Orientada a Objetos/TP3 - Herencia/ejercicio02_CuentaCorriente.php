<?php

    class CuentaCorriente extends CuentaBancaria {

        private $maxDescubierto;

        public function __construct ($numeroCuentaC, $saldoC, $objDuenioC, $maxDescubiertoC) {
            parent :: __construct($numeroCuentaC, $saldoC, $objDuenioC);
            $this -> maxDescubierto = $maxDescubiertoC;
        }

        public function getMaxDescubierto() {
            return $this -> maxDescubierto;
        }

        public function setMaxDescubierto($maxDescubiertoNuevo) {
            $this -> maxDescubierto = $maxDescubiertoNuevo;
        }

        public function realizarRetiro($monto) {
            $saldoCarga = $this -> getSaldo();
            $comprobacion = false;
            if (($saldoCarga - $monto) >= ($this -> getMaxDescubierto() * -1)) {
                $saldoCarga = $saldoCarga - $monto;
                $this -> setSaldo($saldoCarga);
                $comprobacion = true;
            }
            return $comprobacion;
        }

        public function __toString() {
            $cadena = parent :: __toString();
            $cadena = $cadena . "\n" . "Descubierto de la cuenta: " . $this -> getMaxDescubierto();
            return $cadena;
        }

    }

?>