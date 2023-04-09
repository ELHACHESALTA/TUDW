<?php

    class Mostrador {

        private $nombreMostrador;
        private $tipoTramiteMostrador;
        private $maxCola;
        private $colaDeClientes;
        private $colaDeTramites;

        public function __construct($nombreMostradorC, $tipoTramiteMostradorC, $maxColaC, $colaDeClientesC, $colaDeTramitesC) {
            $this -> nombreMostrador = $nombreMostradorC;
            $this -> tipoTramiteMostrador = $tipoTramiteMostradorC;
            $this -> maxCola = $maxColaC;
            $this -> colaDeClientes = $colaDeClientesC;
            $this -> colaDeTramites = $colaDeTramitesC;
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

        public function getColaDeTramites() {
            return $this -> colaDeTramites;
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

        public function setColaDeTramites($colaDeTramitesNuevo) {
            return $this -> colaDeTramites = $colaDeTramitesNuevo;
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

        public function ingresarTramite($unTramiteIT) {
            $listaTramites = $this -> getColaDeTramites();
            array_push($listaTramites, $unTramiteIT);
            $this -> setColaDeTramites($listaTramites);
        }

        public function cerrarTramite($unTramiteCT) {
            if ($unTramiteCT -> getEstadoTramite() == "abierto") {
                $unTramiteCT -> setEstadoTramite("cerrado");
                for($i = 0; $i < count($this -> getColaDeClientes()); $i++) {
                    if ($this -> getColaDeClientes()[$i] -> getObjTramite() == $unTramiteCT) {
                        $colaClientesActualizada = $this -> getColaDeClientes();
                        unset($colaClientesActualizada[$i]);
                        sort($colaClientesActualizada);
                        $this -> setColaDeClientes($colaClientesActualizada);
                    }
                }
                $comprobacion = true;
            } else {
                $comprobacion = false;
            }
            return $comprobacion;
        }

        public function tramitesCerrados() {
            $colaTramites = $this -> getColaDeTramites();
            $colaTramitesCerrados = [];
            for ($i = 0; $i < count($colaTramites); $i++) {
                if ($colaTramites[$i] -> getEstadoTramite() == "cerrado") {
                    array_push($colaTramitesCerrados, $colaTramites[$i]);
                }
            }
            return $colaTramitesCerrados;
        }

        public function tramitesCerradosMes($mesTC) {
            $totalTramitesCerrados = $this -> tramitesCerrados();
            $colaTramitesCerradosMes = [];
            for ($i = 0; $i < count ($totalTramitesCerrados); $i++) {
                $fechaTramiteCerrado = strtotime($totalTramitesCerrados[$i] -> getFechaResolucion());
                $primerDiaMes = strtotime("01." . $mesTC . ".2023");
                $ultimoDiaMes = strtotime("30." . $mesTC . ".2023");
	            if (($fechaTramiteCerrado >= $primerDiaMes) && ($fechaTramiteCerrado <= $ultimoDiaMes)) {
		            array_push($colaTramitesCerradosMes, $totalTramitesCerrados[$i]);
	            }
            }
            return $colaTramitesCerradosMes;
        }

        public function tramitesAbiertos() {
            $colaTramites = $this -> getColaDeTramites();
            $colaTramitesAbiertos = [];
            for ($i = 0; $i < count($colaTramites); $i++) {
                if ($colaTramites[$i] -> getEstadoTramite() == "abierto") {
                    array_push($colaTramitesAbiertos, $colaTramites[$i]);
                }
            }
            return $colaTramitesAbiertos;
        }

        public function cantTramitesAbiertos($unClienteSolicitanteCTA) {
            $colaTramites = $this -> tramitesAbiertos();
            $colaTramitesAbiertos = [];
            for ($i = 0; $i < count($colaTramites); $i++) {
                if ($colaTramites[$i] -> getClienteSolicitante() == $unClienteSolicitanteCTA) {
                    array_push($colaTramitesAbiertos, $colaTramites[$i]);
                }
            }
            return $colaTramitesAbiertos;
        }

        public function cantTramitesCerrados($unClienteSolicitanteCTA) {
            $colaTramites = $this -> tramitesCerrados();
            $colaTramitesCerrados = [];
            for ($i = 0; $i < count($colaTramites); $i++) {
                if ($colaTramites[$i] -> getClienteSolicitante() == $unClienteSolicitanteCTA) {
                    array_push($colaTramitesCerrados, $colaTramites[$i]);
                }
            }
            return $colaTramitesCerrados;
        }

        public function cantTramitesAtendidosMes($mesCTAM) {
            $promedio = count($this -> tramitesCerradosMes($mesCTAM)) / 30;
            return $promedio;
        }

        public function porcentajeTramitesResueltos() {
            $porcentaje = (count($this -> tramitesCerrados()) * 100) / count($this -> getColaDeTramites());
            return $porcentaje;
        }

        public function __toString() {
            $stringTramites = "";
            for ($i = 0; $i < count($this -> getTipoTramiteMostrador()); $i++) {
                $stringTramites = $stringTramites . " - " . $this -> getTipoTramiteMostrador() [$i];
            }
            $datosClientes = "";
            for ($i = 0; $i < count($this -> getColaDeClientes()); $i++) {
                $datosClientes = $datosClientes . " - " . $this -> getColaDeClientes()[$i] -> getObjTramite() -> getClienteSolicitante() -> getNombre() . " " . 
                $this -> getColaDeClientes()[$i] -> getObjTramite() -> getClienteSolicitante() -> getApellido() . "\n";
            }
            if ($datosClientes == "") {
                $datosClientes = " - No hay clientes en la cola. \n";
            }
            $impresion = "\n" . " - Nombre del Mostrador: " . $this -> getNombreMostrador() . "\n" . 
            " - Tipos de trámites del mostrador: \n  " . $stringTramites . "\n" . 
            " - Máximo de clientes en la cola: " . $this -> getMaxCola() . "\n" . 
            " - Clientes en la cola: \n" . $datosClientes . 
            " - Tramites del mostrador: " . count($this -> getColaDeTramites()) . "\n";
            return $impresion;
        }

    }

?>