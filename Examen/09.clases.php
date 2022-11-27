<?php
class Persona {
    private $dni;
    private $nombre;
    private $apellido;

    function __construct($dni, $nombre, $apellido) {
        $this->dni = $dni;
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
        
        return "<u>Persona</u> <br>
                Nombre: $this->nombre <br>
                Apellido: $this->apellido <br>";
        
        //return "Persona: ". $this->nombre. " Apellido: ". $this->apellido;
    }
}

$per1 = new Persona("77718854", "José", "Ortega");
echo $per1. '<br>';

$per1->setApellido("Montes");
echo $per1. '<br>';