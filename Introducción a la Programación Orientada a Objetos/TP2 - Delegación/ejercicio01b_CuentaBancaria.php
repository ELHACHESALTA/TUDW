<?php

    class CuentaBancaria {

        private $numeroCuenta;
        private $persona;
        private $saldoActual;
        private $interesAnual;

        public function __construct($numeroCuentaC, $personaC, $saldoActualC, $interesAnualC) {
            $this -> numeroCuenta = $numeroCuentaC;
            $this -> persona = $personaC;
            $this -> saldoActual = $saldoActualC;
            $this -> interesAnual = $interesAnualC;
        }

        public function getNumeroCuenta() {
            return $this -> numeroCuenta; 
        }

        public function getPersona() {
            return $this -> persona; 
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

        public function setPersona($personaNuevo) {
            $this -> persona = $personaNuevo; 
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
            $impresion = "Número de Cuenta: " . $this -> getNumeroCuenta() . "\n" . 
            "Información del cliente: \n" . 
            $this -> getPersona() . "\n" . 
            "Saldo Actual: " . $this -> getSaldoActual() . "\n" . 
            "Interes Anual: " . $this -> getInteresAnual() . "\n";
            return $impresion;
        }

    }

?>