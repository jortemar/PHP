<?php

    class Persona{
        private $dni;
        private $nombre;
        private $apellido;
        private $edad;

        function __construct($dni, $nombre, $apellido, $edad) {
            $this->dni = $dni;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->edad = $edad;
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
        public function getEdad() {
            return $this->edad;
        }
        public function setEdad($edad) {
            $this->edad = $edad;
        }
        public function __toString() {
            return "<u>ALUMNO</u> <br><br>
                    DNI: ". $this->dni. "<br>".
                    " Nombre: ". $this->nombre. "<br>".
                    " Apellido: ". $this->apellido. "<br>".
                    " Edad: ". $this->edad. "<br><br>";
        }    
    }

    $per1 = new Persona(454545,"Jose","Ortega",37);
    $per2 = new Persona(787878,"Perico","Delgado",56);
    $per = [$per1, $per2];

    $longitud = count($per) - 1;
    
    /*for ($indice = 0; $indice <= $longitud; $indice++){
        echo $per[$indice];
    }*/
    
    foreach($per as $valor) {
        echo $valor;
    }



?>