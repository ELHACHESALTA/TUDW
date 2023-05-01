<?php

    class CuentaBancaria {

        private $numeroCuenta;
        private $saldo;
        private $objDuenio;

        public function __construct($numeroCuentaC, $saldoC, $objDuenioC) {
            $this -> numeroCuenta = $numeroCuentaC;
            $this -> saldo = $saldoC;
            $this -> objDuenio = $objDuenioC;
        }

        public function getNumeroCuenta() {
            return $this -> numeroCuenta; 
        }

        public function getSaldo() {
            return $this -> saldo; 
        }

        public function getObjDuenio() {
            return $this -> objDuenio;
        }

        public function setNumeroCuenta($numeroCuentaNuevo) {
            $this -> numeroCuenta = $numeroCuentaNuevo; 
        }

        public function setSaldo($saldoNuevo) {
            $this -> saldo = $saldoNuevo; 
        }

        public function setObjDuenio($objDuenioNuevo) {
            $this -> objDuenio = $objDuenioNuevo;
        }

        public function saldoCuenta() {
            $saldo = $this -> getSaldo();
            return $saldo;
        }

        public function realizarDeposito($monto) {
            $saldoCarga = $this -> getSaldo();
            $saldoCarga = $saldoCarga + $monto;
            $this -> setSaldo($saldoCarga);
        }

        public function realizarRetiro($monto) {
            $saldoCarga = $this -> getSaldo();
            $comprobacion = false;
            if ($saldoCarga >= $monto) {
                $saldoCarga = $saldoCarga - $monto;
                $this -> setSaldo($saldoCarga);
                $comprobacion = true;
            }
            return $comprobacion;
        }

        public function __toString() {
            $cadena = "\n" . "Número de la cuenta: " . $this -> getNumeroCuenta() . 
            "\n" . "Saldo actual de la cuenta: " . $this -> getSaldo() . 
            "\n" . "Dueño de la cuenta: " . $this -> getObjDuenio();
            return $cadena;
        }

    }

?>