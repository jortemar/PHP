<?php
    class Palabra {

        private $nombre;
        private $esPar;
        private $linea;

        function __construct($nombre, $esPar, $linea) {
            $this->nombre = $nombre;
            $this->esPar = $esPar;
            $this->linea = $linea;
        }

        public function getNombre() {
            return $this->nombre;
        }
        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function getEsPar() {
            return $this->esPar;
        }
        public function setEsPar($esPar) {
            $this->esPar = $esPar;
        }

        public function getLinea() {
            return $this->linea;
        }
        public function setLinea($linea) {
            $this->linea = $linea;
        }

        public function __toString() {
            $frase = ""; 
            $frase += "Palabra: ". $this->nombre;
            
            if ($this->getEsPar()) {
                $frase += ", es par";
            } else
                $frase += ", no es par";
            
            $frase = ", y está en la línea ". $this->linea;
            return $frase;
        }
    }    

   
    $rutaArchivo = "Carpeta_Ficheros/.". ($_FILES["fichero"]["name"]);
    $subidaFichero = move_uploaded_file($_FILES["fichero"]["tmp_name"], $rutaArchivo);

    if ($subidaFichero) {
        $fichero = @fopen($rutaArchivo,"r");

        $contLinea = 1;
        $arrayPal = [];
        
        while ($buffer = fgets($fichero) !== false) {
            $filaPalabras = explode(", ",$buffer);
            
            foreach ($filaPalabras as $pal) {
                if (strlen($pal) % 2 == 0) {
                    $array_pal = new Palabra($pal, true, $contLinea);  //si es par el parámetro booleano es true
                } else
                    $array_pal = new Palabra($pal, false, $contLinea);  //si es impar el booleano es false
            }
            $contLinea++;
        }         
    }

    mostrarPares($array_pal);

        
    function mostrarPares($lista) {
        foreach($lista as $objeto) {
            if ($objeto->getEsPar()) {
                echo $objeto + "<br>";
            }

        }
    }

