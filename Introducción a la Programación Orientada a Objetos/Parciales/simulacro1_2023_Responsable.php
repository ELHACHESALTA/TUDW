<?php

    class Responsable {

        // Atributos

        private $nombre;
        private $apellido;
        private $dni;
        private $direccion;
        private $email;
        private $telefono;

        // Métodos
    
        /**
         * Crea un objeto de la clase Responsable.
         * @param string $nombreC
         * @param string $apellidoC
         * @param int $dniC
         * @param string $direccionC
         * @param string $emailC
         * @param int $telefonoC
         */
        public function __construct($nombreC, $apellidoC, $dniC, $direccionC, $emailC, $telefonoC) {
            $this -> nombre = $nombreC;
            $this -> apellido = $apellidoC;
            $this -> dni = $dniC;
            $this -> direccion = $direccionC;
            $this -> email = $emailC;
            $this -> telefono = $telefonoC;
        }

        /**
         * Retorna el nombre del responsable.
         * @return string
         */
        public function getNombre() {
            return $this -> nombre;
        }

        /**
         * Retorna el apellido del responsable.
         * @return string
         */
        public function getApellido() {
            return $this -> apellido;
        }

        /**
         * Retorna el dni del responsable.
         * @return int
         */
        public function getDni() {
            return $this -> dni;
        }

        /**
         * Retorna la direccion del responsable.
         * @return string
         */
        public function getDireccion() {
            return $this -> direccion;
        }

        /**
         * Retorna el email del responsable.
         * @return string
         */
        public function getEmail() {
            return $this -> email;
        }

        /**
         * Retorna el telefono del responsable.
         * @return int
         */
        public function getTelefono() {
            return $this -> telefono;
        }

        /**
         * Modifica el nombre del responsable.
         * @param string $nombreNuevo
         */
        public function setNombre($nombreNuevo) {
            $this -> nombre = $nombreNuevo;
        }

        /**
         * Modifica el apellido del responsable.
         * @param string $apellidoNuevo
         */
        public function setApellido($apellidoNuevo) {
            $this -> apellido = $apellidoNuevo;
        }

        /**
         * Modifica el dni del responsable.
         * @param int $dniNuevo
         */
        public function setDni($dniNuevo) {
            $this -> dni = $dniNuevo;
        }

        /**
         * Modifica la direccion del responsable.
         * @param string $direccionNuevo
         */
        public function setDireccion($direccionNuevo) {
            $this -> direccion = $direccionNuevo;
        }

        /**
         * Modifica el email del responsable.
         * @param string $emailNuevo
         */
        public function setEmail($emailNuevo) {
            $this -> email = $emailNuevo;
        }

        /**
         * Modifica el telefono del responsable.
         * @param int $telefonoNuevo
         */
        public function setTelefono($telefonoNuevo) {
            $this -> telefono = $telefonoNuevo;
        }

        /**
         * Retorna una cadena con toda la información del responsable.
         * @return string
         */
        public function __toString() {
            $cadena = "\n" . "Nombre del responsable: " . $this -> getNombre() . 
            "\n" . "Apellido del responsable: " . $this -> getApellido() . 
            "\n" . "Número de documento del responsable: " . $this -> getDni() . 
            "\n" . "Direccion del responsable: " . $this -> getDireccion() . 
            "\n" . "Correo electrónico del responsable: " . $this -> getEmail() . 
            "\n" . "Teléfono del responsable: " . $this -> getTelefono();
            return $cadena;
        }

    }

?>