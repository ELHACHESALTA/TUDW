<?php

    class Terminal {

        // Atributos

        private $denominacion;
        private $direccionTerminal;
        private $colEmpresas;

        // Métodos

        /**
         * Crea un objeto de la clase Viaje.
         * @param string $denominacionC
         * @param string $direccionTerminalC
         * @param array $colEmpresasC
         */
        public function __construct($denominacionC, $direccionTerminalC, $colEmpresasC) {
            $this -> denominacion = $denominacionC;
            $this -> direccionTerminal = $direccionTerminalC;
            $this -> colEmpresas = $colEmpresasC;
        }

        /**
         * Retorna la denominación de la terminal.
         * @return string
         */
        public function getDenominacion() {
            return $this -> denominacion;
        }

        /**
         * Retorna la dirección de la terminal.
         * @return string
         */
        public function getDireccionTerminal() {
            return $this -> direccionTerminal;
        }

        /**
         * Retorna la colección de empresas de la terminal.
         * @return array
         */
        public function getColEmpresas() {
            return $this -> colEmpresas;
        }

        /**
         * Modifica la denominación de la terminal.
         * @param string $denominacionNuevo
         */
        public function setDenominacion($denominacionNuevo) {
            $this -> denominacion = $denominacionNuevo;
        }

        /**
         * Modifica la dirección de la terminal.
         * @param string $direccionTerminalNuevo
         */
        public function setDireccionTerminal($direccionTerminalNuevo) {
            $this -> direccionTerminal = $direccionTerminalNuevo;
        }

        /**
         * Modifica la colección de empresas de la terminal.
         * @param array $colEmpresasNuevo
         */
        public function setColEmpresas($colEmpresasNuevo) {
            $this -> colEmpresas = $colEmpresasNuevo;
        }

        /**
         * Recibe por parámetro la cantidad de asientos que se requieren, una fecha, un destino y la empresa con la que se desea viajar. Automáticamente se registra la venta del viaje.
         * @param int $cantAsientos
         * @param string $fecha
         * @param string $destino
         * @param object $empresa
         */
        public function ventaAutomatica($cantAsientos, $fecha, $destino, $empresa) {
            $viajeVendido = $empresa -> venderViajeADestino($cantAsientos, $destino, $fecha);
            $asientosDisponiblesVendido = $viajeVendido -> getAsientosDisponibles();
            $asientosDisponiblesCarga = $asientosDisponiblesVendido - $cantAsientos;
            $comprobacion = false;
            $comprobacion2 = false;
            $i = 0;
            $j = 0;
            $colViajesVendido = [];
            $colEmpresasVendido = [];
            do {
                if ($i < count ($this -> getColEmpresas())) {
                    do {
                        if ($j < count ($this -> getColEmpresas()[$i] -> getColViajes())) {
                            if ($viajeVendido == $this -> getColEmpresas()[$i] -> getColViajes()[$j]) {
                                $colViajesVendido = $this -> getColEmpresas()[$i] -> getColViajes();
                                $colViajesVendido[$j] -> setAsientosDisponibles($asientosDisponiblesCarga);
                                $colEmpresasVendido = $this -> getColEmpresas();
                                $colEmpresasVendido[$i] -> setColViajes($colViajesVendido);
                                $this -> setColEmpresas($colEmpresasVendido);
                                $comprobacion2 = true;
                                $comprobacion = true;
                            } else {
                                $j++;
                            }
                        } else {
                            $comprobacion2 = true;
                        }
                    } while ($comprobacion2 == false); 
                    $i++;
                    $comprobacion2 = false;
                    $j = 0;
                } else {
                    $comprobacion = true;
                }
            } while ($comprobacion == false);
        }

        /**
         * Retorna un objeto de la clase empresa que se corresponde con la de mayor recaudación.
         * @return object
         */
        public function empresaMayorRecaudacion() {
            $mayorRecaudacion = -1;
            $empresaMayorRecaudacion = "";
            for ($i = 0; $i < count($this -> getColEmpresas()); $i++) {
                if ($this -> getColEmpresas()[$i] -> montoRecaudado() > $mayorRecaudacion) {
                    $mayorRecaudacion = $this -> getColEmpresas()[$i] -> montoRecaudado();
                    $empresaMayorRecaudacion = $this -> getColEmpresas()[$i];
                }
            }
            return $empresaMayorRecaudacion;
        }

        /**
         * Recibe por parámetro un numero de viaje y retorna al responsable del viaje.
         * @param int $numeroViaje
         * @return object
         */
        public function responsableViaje($numeroViaje) {
            $comprobacion = false;
            $comprobacion2 = false;
            $i = 0;
            $j = 0;
            do {
                if ($i < count($this -> getColEmpresas())) {
                    do {
                        if ($j < count ($this -> getColEmpresas()[$i] -> getColViajes())) {
                            if ($numeroViaje == $this -> getColEmpresas()[$i] -> getColViajes()[$j] -> getNumViaje()) {
                                $responsableViaje = $this -> getColEmpresas()[$i] -> getColViajes()[$j] -> getObjResponsable();
                            }
                            $j++;
                        } else {
                            $comprobacion2 = true;
                        }
                    } while ($comprobacion2 == false); 
                    $i++;
                } else {
                    $comprobacion = true;
                }
            } while ($comprobacion == false);
            return $responsableViaje;
        }

        /**
         * Retorna una cadena con toda la información de la terminal.
         * @return string
         */
        public function __toString() {
            $datosTerminales = "";
            for ($i = 0; $i < count ($this -> getColEmpresas()); $i++) {
                if ($i < (count($this -> getColEmpresas()) - 1)) {
                    $datosTerminales = $datosTerminales . $this ->getColEmpresas()[$i] . "\n";
                } elseif ($i == (count($this -> getColEmpresas()) - 1)) {
                    $datosTerminales = $datosTerminales . $this ->getColEmpresas()[$i];
                }
            }
            $cadena = "\n" . "Denominacion de la terminal: " . $this -> getDenominacion() . 
            "\n" . "Direccion de la termianl: " . $this -> getDireccionTerminal() . 
            "\n" . "Datos de las empresas de la terminal: " . "\n" . $datosTerminales;
            return $cadena;
        }

    }

?>