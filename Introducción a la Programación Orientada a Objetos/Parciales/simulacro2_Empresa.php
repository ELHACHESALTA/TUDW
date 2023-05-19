<?php

    class Empresa {

        private $id;
        private $nombre;
        private $colObjViajes;

        public function __construct($idC, $nombreC, $colObjViajesC) {
            $this -> id = $idC;
            $this -> nombre = $nombreC;
            $this -> colObjViajes = $colObjViajesC;
        }

        public function getId() {
            return $this -> id;
        }

        public function getNombre() {
            return $this -> nombre;
        }

        public function getColObjViajes() {
            return $this -> colObjViajes;
        }

        public function setId($idNuevo) {
            return $this -> id = $idNuevo;
        }

        public function setNombre($nombreNuevo) {
            return $this -> nombre = $nombreNuevo;
        }

        public function setColObjViajes($colObjViajesNuevo) {
            return $this -> colObjViajes = $colObjViajesNuevo;
        }

        public function buscarViaje($codViaje) {
            $i = 0;
            $comprobacion = true;
            $viajes = $this -> getColObjViajes();
            $viajeElegido = null;
            while ($i < count($viajes) && $comprobacion) {
                if ($viajes[$i] -> getNum() == $codViaje) {
                    $viajeElegido = $viajes[$i];
                    $comprobacion = false;
                } else {
                    $i++;
                }
            }
            return $viajeElegido;
        }

        public function darCostoViaje($codViaje) {
            $importe = 0;
            $viajeElegido = $this -> buscarViaje($codViaje);
            $importe = $viajeElegido -> calcularImporteViaje();
            return $importe;
        }

        public function stringColObjViajes() {
            $stringViajes = "\n";
            $viajes = $this -> getColObjViajes();
            for ($i = 0; $i < count ($viajes); $i++) {
                if ($i < (count ($viajes) - 1)) {
                    $stringViajes = $stringViajes . $viajes[$i] . "\n";
                } else {
                    $stringViajes = $stringViajes . $viajes[$i];
                }
            }
            if ($stringViajes == "\n") {
                $stringViajes = $stringViajes . "No hay viajes en la empresa.";
            }
            return $stringViajes;
        }

        public function __toString() {
            $cadena = "\n" . "Identificación de la empresa: " . $this -> getId() . 
            "\n" . "Nombre de la empresa: " . $this -> getNombre() . 
            "\n" . "Información de los viajes de la empresa: " . $this -> stringColObjViajes();
            return $cadena;
        }

    }

?>