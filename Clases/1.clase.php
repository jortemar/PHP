<?php
    
    class Persona{
        private $DNI;
        private $nombre;
        private $apellido;

        function __construct($DNI, $nombre, $apellido) {
            $this->DNI = $DNI;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
        }

        public function getNombre() {
            return $this->nombre;
        }
        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }
        public function getApellido() {
            return $this->apellido;
        }
        public function setApellido($apellido) {
            $this->apellido = $apellido;
        }
        public function __toString() {
            return "Persona: ". $this->nombre. " ". $this->apellido;
        }
    }

    $per = new Persona("4613513L","Jose","Ortega");
    echo $per. "<br>";
    $per->setApellido("Montes");
    echo $per. "<br>";

    
    class Cliente extends Persona {
        
        private $saldo = 0;

        function __construct($DNI, $nombre, $apellido, $saldo) {
            parent::__construct($DNI, $nombre, $apellido);
            $this->saldo = $saldo;
        }

        public function getSaldo() {
            return $this->saldo;
        }

        public function setSaldo($saldo) {
            $this->saldo = $saldo;
        }

        public function __toString() {
            return "Cliente: ". $this->getNombre();
        }
    
    }

    $cli = new Cliente("51681135L","Jose","Ortega",100);
    echo $cli. "<br>";


?>    