<?php

    class Login {

        private $nombreUsuario;
        private $contrasenia;
        private $fraseRecuerdo;
        private $contrasenia1;
        private $contrasenia2;
        private $contrasenia3;
        private $contrasenia4;

        public function __construct($nombreUsuarioC, $contraseniaC, $fraseRecuerdoC, $contrasenia1C, $contrasenia2C, $contrasenia3C, $contrasenia4C) {
            $this -> nombreUsuario = $nombreUsuarioC;
            $this -> contrasenia = $contraseniaC;
            $this -> fraseRecuerdo = $fraseRecuerdoC;
            $this -> contrasenia1 = $contrasenia1C;
            $this -> contrasenia2 = $contrasenia2C;
            $this -> contrasenia3 = $contrasenia3C;
            $this -> contrasenia4 = $contrasenia4C;
        }

        public function getNombreUsuario() {
            return $this -> nombreUsuario;
        }

        public function getContrasenia() {
            return $this -> contrasenia;
        }

        public function getFraseRecuerdo() {
            return $this -> fraseRecuerdo;
        }

        public function getContrasenia1() {
            return $this -> contrasenia1;
        }

        public function getContrasenia2() {
            return $this -> contrasenia2;
        }

        public function getContrasenia3() {
            return $this -> contrasenia3;
        }

        public function getContrasenia4() {
            return $this -> contrasenia4;
        }

        public function setNombreUsuario($nombreUsuarioNuevo) {
            $this -> nombreUsuario = $nombreUsuarioNuevo;
        }

        public function setContrasenia($contraseniaNuevo) {
            $this -> contrasenia = $contraseniaNuevo;
        }

        public function setFraseRecuerdo($fraseRecuerdoNuevo) {
            $this -> fraseRecuerdo = $fraseRecuerdoNuevo;
        }

        public function setContrasenia1($contrasenia1Nuevo) {
            $this -> contrasenia1 = $contrasenia1Nuevo;
        }

        public function setContrasenia2($contrasenia2Nuevo) {
            $this -> contrasenia2 = $contrasenia2Nuevo;
        }

        public function setContrasenia3($contrasenia3Nuevo) {
            $this -> contrasenia3 = $contrasenia3Nuevo;
        }

        public function setContrasenia4($contrasenia4Nuevo) {
            $this -> contrasenia4 = $contrasenia4Nuevo;
        }

        public function validar($contraIngresada) {
            $comprobacion = true;
            if ($contraIngresada != $this -> getContrasenia()) {
                $comprobacion = false;
            }
            return $comprobacion;
        }

        public function cambiar($contraNueva) {
            $comprobacion = true;
            if ($contraNueva != $this -> getContrasenia()) {
                if ($contraNueva != $this -> getContrasenia1()) {
                    if ($contraNueva != $this -> getContrasenia2()) {
                        if ($contraNueva != $this -> getContrasenia3()) {
                            if ($contraNueva != $this -> getContrasenia4()) {
                                $this -> setContrasenia4($this -> getContrasenia3());
                                $this -> setContrasenia3($this -> getContrasenia2());
                                $this -> setContrasenia2($this -> getContrasenia1());
                                $this -> setContrasenia1($this -> getContrasenia());
                                $this -> setContrasenia($contraNueva);
                            }
                        }
                    }
                }
            } else {
                $comprobacion = false;
            }
            return $comprobacion;
        }

        public function recordar() {
            $cadena = "Su frase de recuerdo de contraseña es: " . $this -> getFraseRecuerdo();
            return $cadena;
        }

        public function __toString() {
            $cadena = "\n" . "Nombre del usuario: " . $this -> getNombreUsuario() . 
            "\n" . "Contraseña del usuario: " . $this -> getContrasenia() . 
            "\n" . "Frase de recuerdo del usuario: " . $this -> getFraseRecuerdo() . 
            "\n" . "Primera contraseña anterior del usuario: " . $this -> getContrasenia1() . 
            "\n" . "Segunda contraseña anterior del usuario: " . $this -> getContrasenia2() . 
            "\n" . "Tercera contraseña anterior del usuario: " . $this -> getContrasenia3() . 
            "\n" . "Cuarta contraseña anterior del usuario: " . $this -> getContrasenia4();
            return $cadena;
        }
    }

?>