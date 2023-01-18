<?php
class Matematicas {
    private $suma;
    private $media;
    private $mediana;
    private $varianza;
    private $moda;

    function __construct($suma, $media, $mediana, $varianza, $moda) {
        $this->suma = $suma;
        $this->media = $media;
        $this->mediana = $mediana;
        $this->varianza = $varianza;
        $this->moda = $moda;
    }

    public function __toString() {
        
        return "<u>Operaciones</u> <br>
                Suma: $this->suma <br>
                Media: $this->media <br>
                Mediana: $this->mediana <br>
                Varianza: $this->varianza <br>
                Moda: $this->moda";
    }

}



