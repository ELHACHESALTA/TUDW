<?php

    class Fecha {

        private $dia;
        private $mes;
        private $anio;

        public function __construct($diaC, $mesC, $anioC){
            $this -> dia = $diaC;
            $this -> mes = $mesC;
            $this -> anio = $anioC;
        }

        public function getDia(){
            return $this -> dia;
        }

        public function getMes(){
            return $this -> mes;
        }

        public function getAnio() {
            return $this -> anio;
        }

        public function setDia($diaNuevo) {
            $this -> dia = $diaNuevo;
        }

        public function setMes($mesNuevo) {
            $this -> mes = $mesNuevo;
        }

        public function setAnio($anioNuevo) {
            $this -> anio = $anioNuevo;
        }

        public function stringAbreviado() {
            $cadena = $this -> getDia() . "/" . $this -> getMes() . "/" . $this -> getAnio();
            return $cadena;
        }

        public function incremento($diaAgregar, $fecha) {
            $arregloFecha = explode("/", $fecha);
            $diaI = $arregloFecha[0];
            $mesI = $arregloFecha[1];
            $anioI = $arregloFecha[2];
            do {
                if ($mesI == 1 || $mesI == 3 || $mesI == 5 || $mesI == 7 || $mesI == 8 || $mesI == 10 || $mesI == 12) {
                    if ($diaAgregar <= (31 - $diaI)) {
                        $diaI = $diaI + $diaAgregar;
                        $diaAgregar = 0;
                    } elseif ($diaAgregar > (31 - $diaI) && $mesI != 12) {
                        $diaAgregar = $diaAgregar - 31;
                        $mesI++;
                    } elseif ($diaAgregar > (31 - $diaI) && $mesI = 12) {
                        $diaAgregar = $diaAgregar - 31;
                        $mesI = 1;
                        $anioI++;
                    }
                } elseif ($mesI == 4 || $mesI == 6 || $mesI == 9 || $mesI == 11) {
                    if ($diaAgregar <= (30 - $diaI)) {
                        $diaI = $diaI + $diaAgregar;
                        $diaAgregar = 0;
                    } elseif ($diaAgregar > (30 - $diaI)) {
                        $diaAgregar = $diaAgregar - 30;
                        $mesI++;
                    }
                } elseif ($mesI == 2 && ($anioI % 4) == 0) {
                    if (!(($anioI % 100) == 0) || (($anioI % 100) == 0 && ($anioI % 400) == 0)) {
                        if ($diaAgregar <= (29 - $diaI)) {
                            $diaI = $diaI + $diaAgregar;
                            $diaAgregar = 0;
                        } elseif ($diaAgregar > (29 - $diaI)) {
                            $diaAgregar = $diaAgregar - 29;
                            $mesI++;
                        }
                    }
                } elseif ($mesI == 2 && ($anioI % 4) != 0) {
                    if ($diaAgregar <= (28 - $diaI)) {
                        $diaI = $diaI + $diaAgregar;
                        $diaAgregar = 0;
                    } elseif ($diaAgregar > (28 - $diaI)) {
                        $diaAgregar = $diaAgregar - 28;
                        $mesI++;
                    }
                }
            } while ($diaAgregar != 0);
            $this -> setDia($diaI);
            $this -> setMes($mesI);
            $this -> setAnio($anioI);
        }

        public function stringExtendido() {
            $mesExtendido = "";
            if ($this -> getMes() == 1 ) {
                $mesExtendido = "enero";
            } elseif ($this -> getMes() == 2 ) {
                $mesExtendido = "febrero";
            } elseif ($this -> getMes() == 3 ) {
                $mesExtendido = "marzo";
            } elseif ($this -> getMes() == 4 ) {
                $mesExtendido = "abril";
            } elseif ($this -> getMes() == 5 ) {
                $mesExtendido = "mayo";
            } elseif ($this -> getMes() == 6 ) {
                $mesExtendido = "junio";
            } elseif ($this -> getMes() == 7 ) {
                $mesExtendido = "julio";
            } elseif ($this -> getMes() == 8 ) {
                $mesExtendido = "agosto";
            } elseif ($this -> getMes() == 9 ) {
                $mesExtendido = "septiembre";
            } elseif ($this -> getMes() == 10 ) {
                $mesExtendido = "octubre";
            } elseif ($this -> getMes() == 11 ) {
                $mesExtendido = "noviembre";
            } elseif ($this -> getMes() == 12 ) {
                $mesExtendido = "diciembre";
            }
            $cadena = $this -> getDia() . " de " . $mesExtendido . " de " . $this -> getAnio();
            return $cadena;
        }

        public function __toString() {
            $cadena = "\n" . "Día/Mes/Año -> " . $this -> stringAbreviado();
            return $cadena;
        }

    }
?>