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

        public function stringClientes() {
            $datosClientes = "\n";
            for ($i = 0; $i < count($this -> getColaDeClientes()); $i++) {
                if ($i < (count($this -> getColaDeClientes()) - 1)) {
                    $datosClientes = $datosClientes . " - " . $this -> getColaDeClientes()[$i] -> getObjPersona() -> getNombre() . " " . 
                    $this -> getColaDeClientes()[$i] -> getObjPersona() -> getApellido() . "\n";
                } else {
                    $datosClientes = $datosClientes . " - " . $this -> getColaDeClientes()[$i] -> getObjPersona() -> getNombre() . " " . 
                    $this -> getColaDeClientes()[$i] -> getObjPersona() -> getApellido();
                }

            }
            if ($datosClientes == "\n") {
                $datosClientes = $datosClientes . " - No hay clientes en la cola.";
            }
            return $datosClientes;
        }

        public function stringTramites() {
            $stringTramites = "\n";
            for ($i = 0; $i < count($this -> getTipoTramiteMostrador()); $i++) {
                if ($i < (count($this -> getTipoTramiteMostrador()) - 1)) {
                    $stringTramites = $stringTramites . " - " . $this -> getTipoTramiteMostrador() [$i] . "\n";
                } else {
                    $stringTramites = $stringTramites . " - " . $this -> getTipoTramiteMostrador() [$i];
                }
            }
            if ($stringTramites == "\n") {
                $stringTramites = $stringTramites . " - No hay tramites en la cola.";
            }
            return $stringTramites;
        }

        public function __toString() {
            $cadena = "\n" . " - Nombre del Mostrador: " . $this -> getNombreMostrador() . 
            "\n" . " - Tipos de trámites del mostrador: " . $this -> stringTramites() . 
            "\n" . " - Máximo de clientes en la cola: " . $this -> getMaxCola() . 
            "\n" . " - Clientes en la cola: " . $this -> stringClientes();
            return $cadena;
        }

    }

?>