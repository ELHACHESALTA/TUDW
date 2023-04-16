<?php

    class CuentaBancaria {

        private $numeroCuenta;
        private $dni;
        private $saldoActual;
        private $interesAnual;

        public function __construct() {
            $this -> numeroCuenta = 1;
            $this -> dni = 12345678;
            $this -> saldoActual = 200;
            $this -> interesAnual = 365;
        }

        public function getNumeroCuenta() {
            return $this -> numeroCuenta; 
        }

        public function getDni() {
            return $this -> dni; 
        }

        public function getSaldoActual() {
            return $this -> saldoActual; 
        }

        public function getInteresAnual() {
            return $this -> interesAnual; 
        }

        public function setNumeroCuenta($numeroCuentaNuevo) {
            $this -> numeroCuenta = $numeroCuentaNuevo; 
        }

        public function setDni($dniNuevo) {
            $this -> dni = $dniNuevo; 
        }

        public function setSaldoActual($saldoActualNuevo) {
            $this -> saldoActual = $saldoActualNuevo; 
        }

        public function setInteresAnual($interesAnualNuevo) {
            $this -> interesAnual = $interesAnualNuevo; 
        }

        public function actualizarSaldo() {
            $nuevoSaldo = $this -> getSaldoActual() + (($this -> getSaldoActual() * ($this -> getInteresAnual() / 365)) / 100);
            $this -> setSaldoActual($nuevoSaldo);
        }

        public function depositar($cant) {
            $nuevoSaldo = $this -> getSaldoActual() + $cant;
            $this -> setSaldoActual($nuevoSaldo);
        }

        public function retirar($cant) {
            $nuevoSaldo = $this -> getSaldoActual() - $cant;
            $this -> setSaldoActual($nuevoSaldo);
        }

        public function __toString() {
            return "Número de Cuenta: " . $this -> getNumeroCuenta() . "\n" . 
            "DNI: " . $this -> getDni() . "\n" . 
            "Saldo Actual: " . $this -> getSaldoActual() . "\n" . 
            "Interes Anual: " . $this -> getInteresAnual() . "\n";
        }

    }

?>