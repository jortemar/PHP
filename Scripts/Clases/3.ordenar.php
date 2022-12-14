<?php
    class Persona{
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
        public function setNombre($dni) {
            $this->dni = $dni;
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
            return "Persona: ". $this->dni. " ". $this->nombre. " ". $this->apellido. " ". $this->cp;
        }
    }

    $persona1 = new Persona(71717, "Pepe", "Jimenez", 39100);
    $persona2 = new Persona(24242, "Antonio", "Sanchez", 30100);
    $persona3 = new Persona(52142, "Bernardo", "Martinez", 56322);
    $persona4 = new Persona(96523, "Francisco", "Guardiola", 85211);

    $array_personas = array($persona1, $persona2, $persona3, $persona4);
    
    $maximo = 0;
    $indice = 0;
    $longitud = count($array_personas) - 1;
    $auxLongitud = $longitud;
    
    while($indice <= $longitud) {
        while($indice <= $longitud) {
            if ($array_personas[$indice]->getCp() >= $maximo) {
                $maximo = $array_personas[$indice]->getCp();
                $posicion = $indice;
            }
            $indice++;
        }

        $aux = $array_personas[$longitud];
        $array_personas[$longitud] = $array_personas[$posicion];
        $array_personas[$posicion] = $aux;
        $maximo = 0;
        $indice = 0;
        $longitud--;
    }

    $indice = 0;
    while ($indice <= $auxLongitud) {
        echo $array_personas[$indice]. "<br>";
        $indice++;
    }

?>