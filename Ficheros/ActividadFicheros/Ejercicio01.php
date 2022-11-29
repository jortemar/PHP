<?php
    class Palabra {

        private $nombre;
        private $numRep;
        private $linea;

        function __construct($nombre, $linea) {
            $this->nombre = $nombre;
            $this->numRep = 1;
            $this->linea = $linea;
        }

        public function getNombre() {
            return $this->nombre;
        }
        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function getNumRep() {
            return $this->numRep;
        }
        public function setNumRep($numRep) {
            $this->numRep = $numRep;
        }
        public function sumarRep() {
            $this->numRep++;
        }

        public function getLinea() {
            return $this->linea;
        }
        public function setLinea($linea) {
            $this->linea = $linea;
        }

        public function __toString() {
            return "Palabra: ". $this->nombre. ", repetida ". $this->numRep. " veces, y está en la línea ". $this->linea;
        }
    }    

   
    $rutaArchivo = "./Carpeta_Ficheros/.". ($_FILES["fichero"]["name"]);
    $subidaFichero = move_uploaded_file($_FILES["fichero"]["tmp_name"], $rutaArchivo);

    if ($subidaFichero) {
        $fichero = @fopen($rutaArchivo,"r");

        var_dump($_FILES);

        $contLinea = 1;
        $palabras = [];
        $filaPalabras = [];

        while ($buffer = fgets($fichero) !== false) {
            $arrayLineas = explode("\n",$buffer); //separa en líneas
            foreach($arrayLineas as $linea )
                $filaPalabras = explode(",", $linea);  //separa en palabras
            
                foreach ($filaPalabras as $pal) {
                    if (in_array($pal, $palabras)) { //comprueba si la palabra ya existe
                        foreach($arrayPal as $objeto) {
                            if ($pal === $objeto->getNombre()) {  //si existe, busca el objeto que tenga ese nombre y le añade una repetición
                                $objeto->sumarRep();
                                break;
                            }
                        }
                    } else    
                        $arrayPal[] = new Palabra($pal, $contLinea);  //si no existe, crea una nueva palabra y la añade al array de palabras repetidas
                        $palabras[] = $pal;                 
                }
                $contLinea++;             
        }         
    }

    //fclose($fichero);

    foreach($arrayPal as $pal) {
        echo $pal;
    } 
