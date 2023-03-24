<?php

    class Login {

        private $nombreUsuario;
        private $contrasenia;
        private $fraseRecuerdo;
        private $contrasenia1;
        private $contrasenia2;
        private $contrasenia3;
        private $contrasenia4;

        public function __construct() {
            echo "Ingrese un nombre de Usuario: ";
            $this -> nombreUsuario = trim(fgets(STDIN));
            echo "Ingrese una contraseña: ";
            $this -> contrasenia = trim(fgets(STDIN));
            echo "Ingrese una frase de recuerdo de contraseña: ";
            $this -> fraseRecuerdo = trim(fgets(STDIN));
            $this -> contrasenia1 = "1111";
            $this -> contrasenia2 = "2222";
            $this -> contrasenia3 = "3333";
            $this -> contrasenia4 = "4444";
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
            return  $this -> nombreUsuario = $nombreUsuarioNuevo;
        }

        public function setContrasenia($contraseniaNueva) {
            return $this -> contrasenia = $contraseniaNueva;
        }

        public function setFraseRecuerdo($fraseRecuerdoNueva) {
            return $this -> fraseRecuerdo = $fraseRecuerdoNueva;
        }

        public function setContrasenia1($contrasenia1Nueva) {
            return $this -> contrasenia1 = $contrasenia1Nueva;
        }

        public function setContrasenia2($contrasenia2Nueva) {
            return $this -> contrasenia2 = $contrasenia2Nueva;
        }

        public function setContrasenia3($contrasenia3Nueva) {
            return $this -> contrasenia3 = $contrasenia3Nueva;
        }

        public function setContrasenia4($contrasenia4Nueva) {
            return $this -> contrasenia4 = $contrasenia4Nueva;
        }

        public function validar() {
            $comprobacion = "";
            echo "Ingrese la contraseña a validar: ";
            $contraIngresada = trim(fgets(STDIN));
            if ($contraIngresada == $this -> getContrasenia()) {
                $comprobacion = "La contraseña ingresada es correcta.";
            } else {
                $comprobacion = "La contraseña ingresada NO es correcta.";
            }
            return $comprobacion;
        }

        public function cambiar() {
            echo "Ingrese la nueva contraseña a cambiar: ";
            $contraNueva = trim(fgets(STDIN));
            while ($contraNueva == $this -> getContrasenia() ||$contraNueva == $this -> getContrasenia1() || $contraNueva == $this -> getContrasenia2() || $contraNueva == $this -> getContrasenia3() || $contraNueva == $this -> getContrasenia4()) {
                echo "La contraseña coincide con la existente o alguna de las últimas 4 usadas. \n";
                echo "Ingrese una nueva contraseña a cambiar: ";
                $contraNueva = trim(fgets(STDIN));
            }
            $this -> setContrasenia4($this -> getContrasenia3());
            $this -> setContrasenia3($this -> getContrasenia2());
            $this -> setContrasenia2($this -> getContrasenia1());
            $this -> setContrasenia1($this -> getContrasenia());
            return $this -> setContrasenia($contraNueva);
        }

        public function recordar() {
            return "Su frase de recuerdo de contraseña es: " . $this -> getFraseRecuerdo();
        }

        public function __toString() {
            return  "(" . $this -> getNombreUsuario() . "," . $this -> getContrasenia() . "," . $this -> getFraseRecuerdo() . "," . $this -> getContrasenia1() . "," . $this -> getContrasenia2() . "," . $this -> getContrasenia3() . "," . $this -> getContrasenia4() . ")";
        }
    }

?>