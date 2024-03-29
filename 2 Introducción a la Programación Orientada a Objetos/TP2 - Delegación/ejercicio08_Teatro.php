<?php

    class Teatro {

        private $nombreTeatro;
        private $direccion;
        private $arregloFunciones;

        public function __construct($nombreTeatroC, $direccionC, $arregloFuncionesC) {
            $this -> nombreTeatro = $nombreTeatroC;
            $this -> direccion = $direccionC;
            $this -> arregloFunciones = $arregloFuncionesC;
        }

        public function getNombreTeatro() {
            return $this -> nombreTeatro;
        }

        public function getDireccion() {
            return $this -> direccion;
        }

        public function getArregloFunciones() {
            return $this -> arregloFunciones;
        }

        public function setNombreTeatro($nombreTeatroNuevo) {
            $this -> nombreTeatro = $nombreTeatroNuevo;
        }

        public function setDireccion($direccionNueva) {
            $this -> direccion = $direccionNueva;
        }

        public function setArregloFunciones($arregloFuncionesNuevo) {
            $this -> arregloFunciones = $arregloFuncionesNuevo;
        }

        public function cargarFuncion($funcionNueva) {
            $comprobacion = false;
            $funcionesTeatro = $this -> getArregloFunciones();
            $horarioInicioNuevo = $funcionNueva -> getHorarioInicio();
            $horarioFinNuevo = $funcionNueva -> horarioFin();
            for($i = 0; $i < count($funcionesTeatro); $i++) {
                if ( strtotime($horarioInicioNuevo) == strtotime($funcionesTeatro[$i] -> getHorarioInicio()) ) {
                    $comprobacion = true;
                } elseif ( strtotime($horarioFinNuevo) == strtotime($funcionesTeatro[$i] -> horarioFin()) ) {
                    $comprobacion = true;
                } elseif ( strtotime($horarioInicioNuevo) < strtotime($funcionesTeatro[$i] -> getHorarioInicio()) && strtotime($horarioFinNuevo) > strtotime($funcionesTeatro[$i] -> horarioFin()) ) {
                    $comprobacion = true;
                } elseif ( strtotime($horarioInicioNuevo) > strtotime($funcionesTeatro[$i] -> getHorarioInicio()) && strtotime($horarioFinNuevo) < strtotime($funcionesTeatro[$i] -> horarioFin()) ) {
                    $comprobacion = true;
                } elseif ( strtotime($horarioInicioNuevo) < strtotime($funcionesTeatro[$i] -> getHorarioInicio()) && strtotime($horarioFinNuevo) < strtotime($funcionesTeatro[$i] -> getHorarioInicio()) ) {
                    $comprobacion = true;
                } elseif ( strtotime($horarioInicioNuevo) < strtotime($funcionesTeatro[$i] -> getHorarioInicio()) && strtotime($horarioFinNuevo) > strtotime($funcionesTeatro[$i] -> getHorarioInicio()) ) {
                    $comprobacion = true;
                }  elseif ( strtotime($horarioInicioNuevo) < strtotime($funcionesTeatro[$i] -> horarioFin()) && strtotime($horarioFinNuevo) > strtotime($funcionesTeatro[$i] -> horarioFin()) ) {
                    $comprobacion = true;
                }
            }
            if($comprobacion == false) {
                array_push($funcionesTeatro, $funcionNueva);
                $this -> setArregloFunciones($funcionesTeatro);
            }
            return $comprobacion;
        }

        public function stringFunciones() {
            $listaFunciones = "\n";
            for($i = 0; $i < count($this -> getArregloFunciones()); $i++) {
                if ($i < (count($this -> getArregloFunciones()) - 1)) {
                    $listaFunciones = $listaFunciones . $this -> getArregloFunciones()[$i] . "\n";
                } else {
                    $listaFunciones = $listaFunciones . $this -> getArregloFunciones()[$i];
                }
            }
            if ($listaFunciones == "\n") {
                $listaFunciones = $listaFunciones . " - No hay funciones en el teatro.";
            }
            return $listaFunciones;
        }

        public function __toString() {
            $cadena = "\n" . "Nombre del teatro: " . $this -> getNombreTeatro() . 
            "\n" . "Direccion: " . $this -> getDireccion() . 
            "\n" . "Funciones: " . $this -> stringFunciones();            
            return $cadena;
        }

    }

?>