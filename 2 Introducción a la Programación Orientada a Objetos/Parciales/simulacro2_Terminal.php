<?php

    class Terminal {

        private $denominacion;
        private $direccion;
        private $colObjEmpresas;

        public function __construct($denominacionC, $direccionC, $colObjEmpresasC) {
            $this -> denominacion = $denominacionC;
            $this -> direccion = $direccionC;
            $this -> colObjEmpresas = $colObjEmpresasC;
        }

        public function getDenominacion() {
            return $this -> denominacion;
        }

        public function getDireccion() {
            return $this -> direccion;
        }

        public function getColObjEmpresas() {
            return $this -> colObjEmpresas;
        }

        public function setDenominacion($denominacionNuevo) {
            $this -> denominacion = $denominacionNuevo;
        }

        public function setDireccion($direccionNuevo) {
            $this -> direccion - $direccionNuevo;
        }

        public function setColObjEmpresas($colObjEmpresasNuevo) {
            $this -> colObjEmpresas = $colObjEmpresasNuevo;
        }

        public function darViajeMenorValor() {
            $empresas = $this -> getColObjEmpresas();
            $colViajesMenores = [];
            for ($i = 0; $i < count ($empresas); $i++) {
                $viajes = $empresas[$i] -> getColObjViajes();
                $menorValor = PHP_INT_MAX;
                $menorViaje = null;
                for ($j = 0; $j < count ($viajes); $j++) {
                    if ($viajes[$j] -> calcularImporteViaje() < $menorValor) {
                        $menorValor = $viajes[$j] -> calcularImporteViaje();
                        $menorViaje = $viajes[$j];
                    }
                }
                array_push($colViajesMenores, $menorViaje);
            }
            return $colViajesMenores;
        }

        public function stringColObjEmpresas() {
            $stringEmpresas = "\n";
            $empresas = $this -> getColObjEmpresas();
            for ($i = 0; $i < count ($empresas); $i++) {
                if ($i < count ($empresas) - 1) {
                    $stringEmpresas = $stringEmpresas . $empresas[$i] . "\n";
                } else {
                    $stringEmpresas = $stringEmpresas . $empresas[$i];
                }
            }
            if ($stringEmpresas == "\n") {
                $stringEmpresas = $stringEmpresas . "No hay empresas en la terminal.";
            }
            return $stringEmpresas;
        }

        public function __toString() {
            $cadena = "\n" . "Denominación de la terminal: " . $this -> getDenominacion() . 
            "\n" . "Dirección de la terminal: " . $this -> getDireccion() . 
            "\n" . "Información de las empresas de la terminal: " . $this -> stringColObjEmpresas();
        return $cadena;
        }

    }

?>