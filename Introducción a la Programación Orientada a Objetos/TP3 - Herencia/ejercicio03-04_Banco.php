<?php

    class Banco {

        private $coleccionCuentaCorriente;
        private $coleccionCajaAhorro;
        private $ultimoValorCuentaAsignado;
        private $coleccionCliente;

        public function __construct($coleccionCuentaCorrienteC, $coleccionCajaAhorroC, $ultimoValorCuentaAsignadoC, $coleccionClienteC) {
            $this -> coleccionCuentaCorriente = $coleccionCuentaCorrienteC;
            $this -> coleccionCajaAhorro = $coleccionCajaAhorroC;
            $this -> ultimoValorCuentaAsignado = $ultimoValorCuentaAsignadoC;
            $this -> coleccionCliente = $coleccionClienteC;
        }

        public function getColeccionCuentaCorriente() {
            return $this -> coleccionCuentaCorriente;
        }

        public function getColeccionCajaAhorro() {
            return $this -> coleccionCajaAhorro;
        }

        public function getUltimoValorCuentaAsignado() {
            return $this -> ultimoValorCuentaAsignado;
        }

        public function getColeccionCliente() {
            return $this -> coleccionCliente;
        }

        public function setColeccionCuentaCorriente($coleccionCuentaCorrienteNuevo) {
            $this -> coleccionCuentaCorriente = $coleccionCuentaCorrienteNuevo;
        }

        public function setColeccionCajaAhorro($coleccionCajaAhorroNuevo) {
            $this -> coleccionCajaAhorro = $coleccionCajaAhorroNuevo;
        }

        public function setUltimoValorCuentaAsignado($ultimoValorCuentaAsignadoNuevo) {
            $this -> ultimoValorCuentaAsignado = $ultimoValorCuentaAsignadoNuevo;
        }

        public function setColeccionCliente($coleccionClienteNuevo) {
            $this -> coleccionCliente = $coleccionClienteNuevo;
        }

        public function incorporarCliente($objCliente) {
            $coleccionClienteCarga = $this -> getColeccionCliente();
            array_push($coleccionClienteCarga, $objCliente);
            $this -> setColeccionCliente($coleccionClienteCarga);
        }

        public function incorporarCuentaCorriente($numeroCliente, $montoDescubierto) {
            $i = 0;
            $colCliente = $this -> getColeccionCliente();
            $comprobacion = true;
            $numeroCuentaCarga = $this -> getUltimoValorCuentaAsignado();
            $coleccionCuentaCorrienteCarga = $this -> getColeccionCuentaCorriente();
            while ($i < count($colCliente) && $comprobacion) {
                if ($numeroCliente == $colCliente[$i] -> getNro()) {
                    $cuentaCorrienteNuevo = new CuentaCorriente ($numeroCuentaCarga + 1, 0, $colCliente[$i], $montoDescubierto);
                    array_push($coleccionCuentaCorrienteCarga, $cuentaCorrienteNuevo);
                    $this -> setColeccionCuentaCorriente($coleccionCuentaCorrienteCarga);
                    $numeroCuentaCarga++;
                    $this -> setUltimoValorCuentaAsignado($numeroCuentaCarga);
                    $comprobacion = false;
                } else {
                    $i++;
                }
            }
        }

        public function incorporarCajaAhorro($numeroCliente) {
            $i = 0;
            $colCliente = $this -> getColeccionCliente();
            $comprobacion = true;
            $numeroCuentaCarga = $this -> getUltimoValorCuentaAsignado();
            $coleccionCajaAhorroCarga = $this -> getColeccionCajaAhorro();
            while ($i < count($colCliente) && $comprobacion) {
                if ($numeroCliente == $colCliente[$i] -> getNro()) {
                    $cajaAhorroNuevo = new CajaAhorro ($numeroCuentaCarga + 1, 0, $colCliente[$i]);
                    array_push($coleccionCajaAhorroCarga, $cajaAhorroNuevo);
                    $this -> setColeccionCajaAhorro($coleccionCajaAhorroCarga);
                    $numeroCuentaCarga++;
                    $this -> setUltimoValorCuentaAsignado($numeroCuentaCarga);
                    $comprobacion = false;
                } else {
                    $i++;
                }
            }
        }

        public function realizarDeposito($numCuenta, $monto) {
            $i = 0;
            $colCuentaCorriente = $this -> getColeccionCuentaCorriente();
            $colCajaAhorro = $this -> getColeccionCajaAhorro();
            $comprobacion = true;
            while ($i < count($colCuentaCorriente) && $comprobacion) {
                if ($numCuenta == $colCuentaCorriente[$i] -> getNumeroCuenta()) {
                    $colCuentaCorriente[$i] -> realizarDeposito($monto);
                    $this -> setColeccionCuentaCorriente($colCuentaCorriente);
                    $comprobacion = false;
                } else {
                    $i++;
                }
            }
            $i = 0;
            while ($i < count($colCajaAhorro) && $comprobacion) {
                if ($numCuenta == $colCajaAhorro[$i] -> getNumeroCuenta()) {
                    $colCajaAhorro[$i] -> realizarDeposito($monto);
                    $this -> setColeccionCajaAhorro($colCajaAhorro);
                    $comprobacion = false;
                } else {
                    $i++;
                }
            }
        }

        public function realizarRetiro($numCuenta, $monto) {
            $i = 0;
            $colCuentaCorriente = $this -> getColeccionCuentaCorriente();
            $colCajaAhorro = $this -> getColeccionCajaAhorro();
            $comprobacion = true;
            $comprobacionRetiro = false;
            while ($i < count($colCuentaCorriente) && $comprobacion) {
                if ($numCuenta == $colCuentaCorriente[$i] -> getNumeroCuenta()) {
                    $comprobacionRetiro = $colCuentaCorriente[$i] -> realizarRetiro($monto);
                    $this -> setColeccionCuentaCorriente($colCuentaCorriente);
                    $comprobacion = false;
                } else {
                    $i++;
                }
            }
            $i = 0;
            while ($i < count($colCajaAhorro) && $comprobacion) {
                if ($numCuenta == $colCajaAhorro[$i] -> getNumeroCuenta()) {
                    $comprobacionRetiro = $colCajaAhorro[$i] -> realizarRetiro($monto);
                    $this -> setColeccionCajaAhorro($colCajaAhorro);
                    $comprobacion = false;
                } else {
                    $i++;
                }
            }
            return $comprobacionRetiro;
        }

        public function stringCuentasCorrientes() {
            $cadenaCuentasCorrientes = "\n";
            $colCuentaCorriente = $this -> getColeccionCuentaCorriente();
            for ($i = 0; $i < count ($colCuentaCorriente); $i++) {
                if ($i < (count ($colCuentaCorriente) - 1)) {
                    $cadenaCuentasCorrientes = $cadenaCuentasCorrientes . $colCuentaCorriente[$i] . "\n";
                } else {
                    $cadenaCuentasCorrientes = $cadenaCuentasCorrientes . $colCuentaCorriente[$i];
                }
            }
            if ($cadenaCuentasCorrientes == "\n") {
                $cadenaCuentasCorrientes = $cadenaCuentasCorrientes . "No hay cuentas corrientes en el banco.";
            }

            return $cadenaCuentasCorrientes;
        }

        public function stringCajasAhorro() {
            $cadenaCajasAhorro = "\n";
            $colCajaAhorro = $this -> getColeccionCajaAhorro();
            for ($i = 0; $i < count ($colCajaAhorro); $i++) {
                if ($i < (count ($colCajaAhorro) - 1)) {
                    $cadenaCajasAhorro = $cadenaCajasAhorro . $colCajaAhorro[$i] . "\n";
                } else {
                    $cadenaCajasAhorro = $cadenaCajasAhorro . $colCajaAhorro[$i];
                }
            }
            if ($cadenaCajasAhorro == "\n") {
                $cadenaCajasAhorro = $cadenaCajasAhorro . "No hay cajas de ahorro en el banco.";
            }

            return $cadenaCajasAhorro;
        }

        public function stringClientes() {
            $cadenaClientes = "\n";
            $colCliente = $this -> getColeccionCliente();
            for ($i = 0; $i < count ($colCliente); $i++) {
                if ($i < (count ($colCliente) - 1)) {
                    $cadenaClientes = $cadenaClientes . $colCliente[$i] . "\n";
                } else {
                    $cadenaClientes = $cadenaClientes . $colCliente[$i];
                }
            }
            if ($cadenaClientes == "\n") {
                $cadenaClientes = $cadenaClientes . "No hay clientes en el banco.";
            }

            return $cadenaClientes;
        }

        public function __toString() {
            $cadena = "\n" . "Cuentas corrientes del banco: " . $this -> stringCuentasCorrientes() .  
            "\n" . "\n" . "Caja de ahorros del banco: " . $this -> stringCajasAhorro() .  
            "\n" . "\n" . "Último valor de cuenta asignado del banco: " . $this -> getUltimoValorCuentaAsignado() . 
            "\n" . "\n" . "Clientes del banco: " . $this -> stringClientes();
            return $cadena;
        }

    }

?>