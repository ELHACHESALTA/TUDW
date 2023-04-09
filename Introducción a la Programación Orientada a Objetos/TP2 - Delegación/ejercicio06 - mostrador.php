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

        public function atiende($unTramiteA) {
            $comprobacion = false;
            $listaTramites = $this -> getTipoTramiteMostrador();
            $i = 0;
            while ($comprobacion == false && $i < count($listaTramites)) {
                if ($unTramiteA == $listaTramites[$i]) {
                    $comprobacion = true;
                } else {
                    $i++;
                }
            }
            return $comprobacion;
        }

        public function __toString() {
            $datosClientes = "";
            for ($i = 0; $i < count($this -> getColaDeClientes()); $i++) {
                $datosClientes = $datosClientes . " - " . $this -> getColaDeClientes()[$i] -> getObjPersona() -> getNombre() . " " . 
                $this -> getColaDeClientes()[$i] -> getObjPersona() -> getApellido() . "\n";
            }
            if ($datosClientes == "") {
                $datosClientes = " - No hay clientes en la cola. \n";
            }
            $stringTramites = "";
            for ($i = 0; $i < count($this -> getTipoTramiteMostrador()); $i++) {
                $stringTramites = $stringTramites . " - " . $this -> getTipoTramiteMostrador() [$i];
            }
            $impresion = "\n" . " - Nombre del Mostrador: " . $this -> getNombreMostrador() . "\n" . 
            " - Tipos de trámites del mostrador: \n  " . $stringTramites . "\n" . 
            " - Máximo de clientes en la cola: " . $this -> getMaxCola() . "\n" . 
            " - Clientes en la cola: \n" . $datosClientes;
            return $impresion;
        }

    }

?>