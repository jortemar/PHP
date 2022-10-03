<?php
    class Persona {

        private $dni;
        private $nombre;
        private $apellido;
        private $cp;

        function __construct($dni, $nombre, $apellido, $cp) {
            $this->dni = $dni;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->cp = $cp;
        }

        public function getDni() {
            return $this->dni;
        }
        public function setDni($dni) {
            $this->dni = $dni;
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

        public function getCp() {
            return $this->cp;
        }
        public function setCp($cp) {
            $this->cp = $cp;
        }

        public function __toString() {
            return "Dni: ".$this->dni.
                    " Nombre: ".$this->nombre.
                    " Apellido: ".$this->apellido.
                    " CP: ".$this->cp;
        }  
    }

    $per1 = new Persona(77718854, "Jose", "Ortega", 30520);
    $per2 = new Persona(85458596, "Cesar", "Tontoelpijo", 35896);
    $per3 = new Persona(45654121, "Antonio", "Cerezo", 25123);
    $per4 = new Persona(15236544, "Luis", "Alfonso", 11223);

    $personas = array($per1, $per2, $per3, $per4);

    echo($per1);

    function ordenarArray($personas) {

        for ($i = 0; $i < count($personas); $i++) {
            $i->getCp = 
        }
    }

?>