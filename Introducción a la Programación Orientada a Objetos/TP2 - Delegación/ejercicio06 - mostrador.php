<?php

    class Mostrador {

        private $nombreMostrador;
        private $tipoTramiteMostrador;
        private $maxCola;
        private $colaDeClientes;

        public function __construct($nombreMostradorC, $tipoTramiteMostradorC, $maxColaC, $colaDeClientesC) {
            $this -> nombreMostrador = $nombreMostradorC;
            $this -> tipoTramiteMostrador = $tipoTramiteMostradorC;
            $this -> maxCola = $maxColaC;
            $this -> colaDeClientes = $colaDeClientesC;
        }

        public function getNombreMostrador() {
            return $this -> nombreMostrador;
        }

        public function getTipoTramiteMostrador() {
            return $this -> tipoTramiteMostrador;
        }

        public function getMaxCola() {
            return $this -> maxCola;
        }

        public function getColaDeClientes() {
            return $this -> colaDeClientes;
        }

        public function setNombreMostrador($nombreMostradorNuevo) {
            $this -> nombreMostrador = $nombreMostradorNuevo;
        }

        public function setTipoTramiteMostrador($tipoTramiteMostradorNuevo) {
            $this -> tipoTramiteMostrador = $tipoTramiteMostradorNuevo;
        }

        public function setMaxCola($maxColaNuevo) {
            $this -> maxCola = $maxColaNuevo;
        }

        public function setColaDeClientes($colaDeClientesNuevo) {
            $this -> colaDeClientes = $colaDeClientesNuevo;
        }

        public function esTramite($unTramiteET, $bancoET) {
            $comprobacion = false;
            $listaMostradores = $bancoET -> getArregloMostradores();
            $i = 0;
            while ($comprobacion == false && $i < count($listaMostradores)) {
                if ($unTramiteET == $listaMostradores[$i] -> getTipoTramiteMostrador()) {
                    $comprobacion = true;
                } else {
                    $i++;
                }
            }
            return $comprobacion;
        }

        public function atiende($unTramiteA) {
            $comprobacion = "false";
            if ($this -> getTipoTramiteMostrador() == $unTramiteA) {
                $comprobacion = "true";
            }
            return $comprobacion;
        }

        public function __toString() {
            $datosClientes = "";
            for ($i = 0; $i < count($this -> getColaDeClientes()); $i++) {
                $datosClientes = $datosClientes . " - " . $this -> getColaDeClientes()[$i] -> getNombreCliente() . " " . 
                $this -> getColaDeClientes()[$i] -> getApellido() . "\n";
            }
            if ($datosClientes == "") {
                $datosClientes = " - No hay clientes en la cola. \n";
            }
            $impresion = "\n" . " - Nombre del Mostrador: " . $this -> getNombreMostrador() . "\n" . 
            " - Tipo de trámite del mostrador: " . $this -> getTipoTramiteMostrador() . "\n" . 
            " - Máximo de clientes en la cola: " . $this -> getMaxCola() . "\n" . 
            " - Clientes en la cola: \n" . $datosClientes;
            return $impresion;
        }

    }

?>