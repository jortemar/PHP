<?php
// necesitamos la clase Persona que hemos creado en 09.clases.php
require "09.clases.php";

class Cliente extends Persona {
    private $saldo = 0;

    function __construct($dni, $nombre, $apellido, $saldo) {
        // llamamos al constructor de la clase padre (Persona)
        parent::__construct($dni, $nombre, $apellido);
        $this->saldo = $saldo;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function __toString() {
        //utilizamos sin problema un método de la clase padre
        return "Cliente: ". $this->getNombre();
    }
}

$cliente1 = new Cliente("55521452B", "Andrés", "Bastida", "1000");
echo $cliente1;

