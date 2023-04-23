<?php

    class CuentaBancaria {

        private $numeroCuenta;
        private $dni;
        private $saldoActual;
        private $interesAnual;

        public function __construct($numeroCuentaC, $dniC, $saldoActualC, $interesAnualC) {
            $this -> numeroCuenta = $numeroCuentaC;
            $this -> dni = $dniC;
            $this -> saldoActual = $saldoActualC;
            $this -> interesAnual = $interesAnualC;
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
            $cadena = "\n" . "Número de la cuenta: " . $this -> getNumeroCuenta() . 
            "\n" . "DNI de la cuenta: " . $this -> getDni() . 
            "\n" . "Saldo actual de la cuenta: " . $this -> getSaldoActual() . 
            "\n" . "Interes anual de la cuenta: " . $this -> getInteresAnual();
            return $cadena;
        }

    }

?>