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
                sort($colaClientesActualizada);
                $mostradorParaCliente -> setColaDeClientes($colaClientesActualizada);
                $mostradorParaCliente -> ingresarTramite($unClienteA -> getObjTramite());
                $comprobacion = true;
            }
            return $comprobacion;
        }

        public function promTramitesIngresadosDia() {
            $totalTramitesIngresados = 0;
            for ($i = 0; $i < count($this -> getArregloMostradores()); $i++) {
                $totalTramitesIngresados = $totalTramitesIngresados + count($this -> getArregloMostradores()[$i] -> getColaDeTramites());
            }
            $promedio = $totalTramitesIngresados / 30;
            return $promedio;
        }

        public function promTramitesCerradosDia() {
            $totalTramitesCerrados = 0;
            for ($i = 0; $i < count($this -> getArregloMostradores()); $i++) {
                $totalTramitesCerrados = $totalTramitesCerrados + count($this -> getArregloMostradores()[$i] -> tramitesCerrados());
            }
            $promedio = $totalTramitesCerrados / 30;
            return $promedio;
        }

        public function mostradorResuelveMasTramites() {
            $mostradorMayor = "";
            $porcentajeMayor = 0;
            for ($i = 0; $i < count($this -> getArregloMostradores()); $i++) {
                if ($this -> getArregloMostradores()[$i] -> tramitesCerrados() != null) {
                    if ($porcentajeMayor < $this -> getArregloMostradores()[$i] -> porcentajeTramitesResueltos()) {
                        $porcentajeMayor = $this -> getArregloMostradores()[$i] -> porcentajeTramitesResueltos();
                        $mostradorMayor = $this -> getArregloMostradores()[$i];
                    }
                }
            }
            return $mostradorMayor;
        }

        public function stringMostradores() {
            $listaMostradores = "\n";
            $datosMostradores = $this -> getArregloMostradores();
            for ($i = 0; $i < count($this -> getArregloMostradores()); $i++) {
                if ($i < (count($this -> getArregloMostradores()) - 1)) {
                    $listaMostradores = $listaMostradores . $datosMostradores[$i] . "\n";
                } else {
                    $listaMostradores = $listaMostradores . $datosMostradores[$i];
                }
            }
            if ($datosMostradores == "\n") {
                $datosMostradores = $datosMostradores . " - No hay mostradores cargados.";
            }
            return $listaMostradores;
        }

        public function __toString() {
            $cadena = "\n" . "Los mostradores del banco son: " . $this -> stringMostradores();
            return $cadena;
        }

    }

?>