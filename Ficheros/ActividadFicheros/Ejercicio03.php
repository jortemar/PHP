<?php
    class Palabra {

        private $nombre;
        private $divTres;
        private $linea;

        function __construct($nombre, $divTres, $linea) {
            $this->nombre = $nombre;
            $this->divTres = $divTres;
            $this->linea = $linea;
        }

        public function getNombre() {
            return $this->nombre;
        }
        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function getDivTres() {
            return $this->divTres;
        }
        public function setEsPar($divTres) {
            $this->divTres = $divTres;
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
            
            if ($this->getDivTres()) {
                $frase += ", es divisible entre tres";
            } else
                $frase += ", no es divisible entre tres";
            
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
                if (strlen($pal) % 3 == 0) {
                    $array_pal = new Palabra($pal, true, $contLinea);
                } else
                    $array_pal = new Palabra($pal, false, $contLinea);                
            }
            $contLinea++;
        }         
    }

    mostrarPares($array_pal);

        
    function mostrarPares($lista) {
        foreach($lista as $objeto) {
            if ($objeto->getDivTres()) {
                echo $objeto + "<br>";
            }

        }
    }

