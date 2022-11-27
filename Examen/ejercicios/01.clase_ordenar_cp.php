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

    public function __toString(){
        return "<u>Persona</u><br>
            Nombre: $this->nombre <br>
            Apellido: $this->apellido <br>
            Código Postal: $this->cp <br>";
    }

}

$per1 = new Persona("77718854Z", "José", "Ortega", 30520);
$per2 = new Persona("65465456Y", "Andrés", "Montes", 45980);
$per3 = new Persona("15396834O", "Ana", "Monreal", 12570);
$per4 = new Persona("69846842P", "María", "Benítez", 32760);

$personas = [$per1, $per2, $per3, $per4];
$minimo = 99999;
$longitud = count($personas) - 1;

/*
while ($i <= $longitud) {
    while ($i <= $longitud) {
        if ($personas[$i]->getCp() <= $minimo) {
            $minimo = $personas[$i]->getCp();
            $posicion = $i; 
        }  
        $i++;
    }

    $aux = $personas[$longitud];
    $personas[$longitud] = $personas[$posicion];
    $personas[$posicion] = $aux;
    $minimo = 99999;
    $longitud--;
    $i = 0;
}
*/
for ($i = 0; $i <= $longitud; $i++) {
    for ($i = 0; $i <= $longitud; $i++) {
        if ($personas[$i]->getCp() <= $minimo) {
            $minimo = $personas[$i]->getCp();
            $posicion = $i; 
        }  
    }    
    $aux = $personas[$longitud];
    $personas[$longitud] = $personas[$posicion];
    $personas[$posicion] = $aux;
    $minimo = 99999;
    $longitud--;
    $i = 0;
}

foreach ($personas as $valor) {
    echo $valor. '<br>';
}
