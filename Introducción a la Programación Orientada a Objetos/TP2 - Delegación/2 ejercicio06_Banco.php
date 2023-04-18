<?php

    class Banco {

        private $arregloMostradores;

        public function __construct($arregloMostradoresC) {
            $this -> arregloMostradores = $arregloMostradoresC;
        }
        
        public function getArregloMostradores() {
            return $this -> arregloMostradores;
        }

        public function setArregloMostradores($arregloMostradoresNuevo) {
            $this -> arregloMostradores = $arregloMostradoresNuevo;
        }

        public function mostradoresQueAtienden($unTramiteMQA) {
            $mostradoresSeleccionados = [];
            $listaMostradores = $this -> getArregloMostradores();
            for ($i = 0; $i < count($listaMostradores); $i++) {
                    if ($listaMostradores[$i] -> atiende($unTramiteMQA) == true) {
                        array_push($mostradoresSeleccionados, $listaMostradores[$i]);
                    }
            }
            return $mostradoresSeleccionados;
        }

        public function mejorMostradorPara($unTramiteMMP) {
            $mostradoresSeleccionados = $this -> mostradoresQueAtienden($unTramiteMMP);
            $mostradorElegido = [];
            $filaMasCorta = 10000;
            for($i = 0; $i < count($mostradoresSeleccionados); $i++) {
                if (count($mostradoresSeleccionados[$i] -> getColadeClientes()) < $filaMasCorta && count($mostradoresSeleccionados[$i] -> getColadeClientes()) < $mostradoresSeleccionados[$i] -> getMaxCola()) {
                    $filaMasCorta = count($mostradoresSeleccionados[$i] -> getColadeClientes());
                    $mostradorElegido = $mostradoresSeleccionados[$i];
                }
            }
            return $mostradorElegido;
        }

        public function atender($unClienteA) {
            $mostradorParaCliente = [];
            $mostradorParaCliente = $this -> mejorMostradorPara($unClienteA -> getObjTramite() -> getTipoTramite());
            if ($mostradorParaCliente == null) {
                $comprobacion = false;
            } else {
                $colaClientesActualizada = $mostradorParaCliente -> getColaDeClientes();
                array_push($colaClientesActualizada, $unClienteA);
                $mostradorParaCliente -> setColaDeClientes($colaClientesActualizada);
                $comprobacion = true;
            }
            return $comprobacion;
        }

        public function __toString() {
            $listaMostradores = "";
            $datosMostradores = $this -> getArregloMostradores();
            for ($i = 0; $i < count($this -> getArregloMostradores()); $i++) {
                $listaMostradores = $listaMostradores . $datosMostradores[$i];
            }
            $impresion = "\n" . "Los mostradores del banco son: " . 
            $listaMostradores;
            return $impresion;
        }

    }

?>