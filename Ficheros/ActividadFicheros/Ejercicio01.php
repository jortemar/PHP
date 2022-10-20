<?php

    class Palabra {

        private $nombre;
        private $numRepet;
        private $lineaUbicacion;

        function __construct($nombre, $numRepet, $lineaUbicacion) {
            $this->nombre = $nombre;
            $this->numRepet = $numRepet;
            $this->lineaUbicacion = $lineaUbicacion;
        }

        public function getNombre() {
            return $this->nombre;
        }
        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function getNumRepet() {
            return $this->numRepet;
        }
        public function setNumRepet($numRepet) {
            $this->numRepet = $numRepet;
        }

        public function getLineaUbicacion() {
            return $this->lineaUbicacion;
        }
        public function setLineaUbicacion($lineaUbicacion) {
            $this->lineaUbicacion = $lineaUbicacion;
        }

        public function __toString() {
            return "Palabra: ". $this->nombre. ", repetida ". $this->apellido. " veces, y está en la línea ". $this->lineaUbicacion;
        }
    }    

    require_once("Ejercicio01.php");
     
    $subidaFichero = move_uploaded_file($_FILES["fichero"]["tmp_name"], "Carpeta_Ficheros/". "array_personas.txt");

    if ($subidaFichero) {
        $gestor = @fopen("Carpeta_Ficheros/array_personas.txt","r");

        $contadorLineas = 1;

        while ($buffer=fgets($gestor) !== false) {

            $filaPalabras = explode(",",$buffer);
            

            foreach ($filaPalabras as $valor) {    
                          
                foreach ($array_pal as $indice => $contenido) {
                    if ($valor !== $array_pal[$indice]->nombre) {
                     
                        $array_pal = new Palabra($valor, 0, $contadorLineas);
                    }
                                    
                }
            }
            $contadorLineas++;    
        }         
    }

    foreach($arra_palabras as $palabra) {
        echo $palabra;
    } 
