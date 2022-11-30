<?php
class Palabra {
    private $nombre;
    private $rep;
    private $fila = array();

    function __construct($nombre, $fila) {
        $this->nombre = $nombre;
        $this->rep = 1;
        $this->fila[] = $fila;
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
        array_push($this->fila, $fila);
    }

    public function mostrarFilas() {
        //echo count($this->fila).'<br>';
        if (count($this->fila) == 1) {
            echo "en la linea ". implode(" y ", $this->fila). '<br>';
        } else
            echo "en las lineas ". implode(" y ", $this->fila). '<br>';
    }

    function __toString() {
        if ($this->rep == 1) {
            return "La palabra <u>$this->nombre</u> está repetida $this->rep vez";
        } else
            return "La palabra <u>$this->nombre</u> está repetida $this->rep veces";
    }
}

$ruta = "carpeta_fichero/".$_FILES["fichero"]["name"];
$ficheroCopiado = move_uploaded_file($_FILES["fichero"]["tmp_name"], $ruta);

if ($ficheroCopiado) {
    $fichero = fopen($ruta,"r");
    $arrPalabras = array();
    $contLinea = 0;

    while (!feof($fichero)) {      
        $contLinea++;
        $linea = fgets($fichero);      
        // un tercer parámetro con valor negativo excluye al último elemento del array
        $palabras = explode(",", $linea, -1);

        foreach ($palabras as $pal) {
            if (!in_array($pal, $arrPalabras)) {  
                $arrObjetos[] = new Palabra($pal, $contLinea);
                $arrPalabras[] = $pal;  

            } else {
                foreach ($arrObjetos as $objeto) {                    
                    if ($pal === $objeto->getNombre()) {
                        $objeto->sumarRep();
                        $objeto->setFila($contLinea);
                        break;
                    }                    
                }
            }
        }                                     
    }
}       

fclose($fichero);

foreach($arrObjetos as $objeto) {
    echo $objeto. '<br>';
    echo $objeto->mostrarFilas(). '<br>';
} 



