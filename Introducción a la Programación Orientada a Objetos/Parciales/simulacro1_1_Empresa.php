<?php

    class Empresa {

        // Atributos

        private $identificacion;
        private $nombreEmpresa;
        private $colViajes;

        // Métodos

        /**
         * Crea un objeto de la clase Empresa.
         * @param string $identificacionC
         * @param string $nombreEmpresaC
         * @param array $colViajesC
         */
        public function __construct($identificacionC, $nombreEmpresaC, $colViajesC) {
            $this -> identificacion = $identificacionC;
            $this -> nombreEmpresa = $nombreEmpresaC;
            $this -> colViajes = $colViajesC;
        }

        /**
         * Retorna la identificacion de la empresa.
         * @return string
         */
        public function getIdentificacion() {
            return $this -> identificacion;
        }

        /**
         * Retorna el nombre de la empresa.
         * @return string
         */
        public function getNombreEmpresa() {
            return $this -> nombreEmpresa;
        }

        /**
         * Retorna la colección de viajes de la empresa.
         * @return array
         */
        public function getColViajes() {
            return $this -> colViajes;
        }

        /**
         * Modifica la identificacion de la empresa.
         * @param string $identificacionNuevo
         */
        public function setIdentificacion($identificacionNuevo) {
            $this -> identificacion = $identificacionNuevo;
        }

        /**
         * Modifica el nombre de la empresa.
         * @param string $nombreEmpresaNuevo
         */
        public function setNombreEmpresa($nombreEmpresaNuevo) {
            $this -> nombreEmpresa = $nombreEmpresaNuevo;
        }

        /**
         * Modifica la colección de viajes de la empresa.
         * @param array $colViajesNuevo
         */
        public function setColViajes($colViajesNuevo) {
            $this -> colViajes = $colViajesNuevo;
        }

        /**
         * Recibe por parámetro un destino junto a una cantidad de asientos y retorna una colección con todos los viajes disponibles a ese destino.
         * @param string $elDestino
         * @param int $catAsientos
         * @return array
         */
        public function darViajeADestino($elDestino, $catAsientos) {
            $colViajesADestino = [];
            $totalViajes = $this -> getColViajes();
            for ($i = 0; $i < count($totalViajes); $i++) {
                if ($elDestino == $totalViajes[$i] -> getDestino() && $totalViajes[$i] -> asignarAsientosDisponibles($catAsientos)) {
                    array_push($colViajesADestino, $totalViajes[$i]);
                }
            }
            return $colViajesADestino;
        }

        /**
         * Recibe como parámetro un viaje, verifica que no se encuentre registrado ningún otro viaje al mismo destino, en la misma fecha y con el mismo horario de partida; y retorna verdadero si la incorporación del viaje se realizó correctamente y falso en caso contrario.
         * @param object $objViaje
         * @return bool
         */
        public function incorporarViaje($objViaje) {
            $totalViajes = $this -> getColViajes();
            $resultado = true;
            $comprobacion = true;
            $i = 0;
            do {
                if ($i < count ($totalViajes)){
                    if ($objViaje -> getDestino() == $totalViajes[$i] -> getDestino()) {
                        if ($objViaje -> getFecha() == $totalViajes[$i] -> getFecha()) {
                            if ($objViaje -> getHorarioPartida() == $totalViajes[$i] -> getHorarioPartida()){
                                $comprobacion = false;
                                $resultado = false;
                            }
                        }
                    }
                    $i++;
                } else {
                    $comprobacion = false;
                }
            } while ($comprobacion == true);
            return $resultado;
        }

        /**
         * Recibe por parámetro la cantidad de asientos, el destino, una fecha y se registra la asignación del viaje en caso de ser posible; y retorna la instancia del viaje asignado o null en caso contrario.
         * @param int $canAsientos
         * @param string $destino
         * @param string $fecha
         * @return object
         */
        public function venderViajeADestino($canAsientos, $destino, $fecha) {
            $viajesPosibles = $this -> darViajeADestino($destino, $canAsientos);
            $viajeAsignado = "";
            $comprobacion = false;
            $i = 0;
            do {
                if ($i < count ($viajesPosibles)) {
                    if ($fecha == $viajesPosibles[$i] -> getFecha()) {
                        $viajeAsignado = $viajesPosibles[$i];
                        $comprobacion = true;
                    }
                    $i++;
                } else {
                    $comprobacion = true;
                }
            } while ($comprobacion == false);
            return $viajeAsignado;
        }

        /**
         * Retorna el monto recaudado por la Empresa.
         * @return int
         */
        public function montoRecaudado() {
            $totalViajes = $this -> getColViajes();
            $montoTotal = 0;
            for ($i = 0; $i < count($totalViajes); $i++) {
                $asientosVendidos = $totalViajes[$i] -> getAsientosTotales() - $totalViajes[$i] -> getAsientosDisponibles();
                $montoTotal = $montoTotal + ($asientosVendidos * $totalViajes[$i] -> getImporte());
            }
            return $montoTotal;
        }

        /**
         * Retorna una cadena con toda la información de la empresa.
         * @return string
         */
        public function __toString() {
            $datosViajes = "";
            for ($i = 0; $i < count($this -> getColViajes()); $i++) {
                if($i < (count($this -> getColViajes()) - 1)) {
                    $datosViajes = $datosViajes . $this -> getColViajes()[$i] . "\n";
                } elseif ($i ==(count($this -> getColViajes()) - 1)) {
                    $datosViajes = $datosViajes . $this -> getColViajes()[$i];
                }

            }
            $cadena = "\n" . "Identificación de la empresa: " . $this -> getIdentificacion() . 
            "\n" . "Nombre de la empresa: " . $this -> getNombreEmpresa() . 
            "\n" . "Datos de los viajes de la empresa: " . "\n" . $datosViajes;
            return $cadena;
        }

    }

?>