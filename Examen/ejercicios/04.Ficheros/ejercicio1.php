<?php
class Palabra {
    private $nombre;
    private $rep;
    private $fila = array();

    function __construct($nombre, $rep, $fila) {
        $this->nombre = $nombre;
        $this->rep = $rep;
        $this->fila = $fila;
    }

    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function getRep() {
        return $this->rep;
    }
    public function setRep($rep) {
        $this->rep = $rep;
    }
    public function sumarRep() {
        $this->rep++;
    }

    public function getFila() {
        return $this->fila;
    }
    public function setFila($fila) {
        $this->fila = $fila;
    }

    public function mostrarFilas() {
        foreach($this->fila as $clave) {
            echo $clave. '<br>';
        }
    }

    function __toString() {
        return "$this->nombre está repetida $this->rep vez";
    }
}

$ruta = "carpeta_fichero/".$_FILES["fichero"]["name"];
$ficheroCopiado = move_uploaded_file($_FILES["fichero"]["tmp_name"], $ruta);

if ($ficheroCopiado) {

    $fichero = fopen($ruta,"r");

    $contLinea = 0;
    $arrPalabras = array();

    while (!feof($fichero)) {
        $contLinea++;
        $linea = fgets($fichero);   // extraigo un string con la 1ª línea
        $palabras = explode(",", $linea);  // extraigo un array de palabras de la 1ª línea

        
        
        foreach ($palabras as $pal) {
            
            if (!in_array($pal, $arrPalabras)) {  //comprueba si la palabra ya existe
                $arrObjetos[] = new Palabra($pal, 1, $contLinea);  //si no existe, crea una nueva palabra y la añade al array de palabras repetidas
                $arrPalabras[] = $pal;                 

            } else {
                foreach ($arrObjetos as $objeto) {                    
                    if ($pal === $objeto->getNombre()) {
                        $objeto->sumarRep();
                        $objeto->setFila($contLinea);
                    }                    
                }
            }                        
        }    
    }
}       

fclose($fichero);

foreach($arrObjetos as $objeto) {
    echo $objeto. '<br>';
} 



