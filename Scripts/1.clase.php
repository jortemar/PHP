<?php

    class Clase {

        private $mesas;
        private $sillas;
        private $ordenadores;

        function __construct($mesas, $sillas, $ordenadores) {
            $this->mesas = $mesas;
            $this->sillas = $sillas;
            $this->ordenadores = $ordenadores;
        }

        public function getMesas() {
            return $this->mesas;
        }
        public function setMesas($mesas) {
            $this->mesas = $mesas;
        }

        public function getSillas() {
            return $this->sillas;
        }
        public function setSillas($sillas) {
            $this->sillas= $sillas;
        }

        public function getOrdenadores() {
            return $this->ordenadores;
        }
        public function setOrdenadores($ordenadores) {
            $this->ordenadores = $ordenadores;
        }

        public function __toString() {
            return "Mesas: ".$this->mesas.
                    "Sillas: ".$this->sillas.
                    "Ordeandores: ".$this->ordenadores;
        }
    }

        $clase1 = new Clase(10,20,40);
        $clase2 = new Clase(20,30,15);

        sumarObjetos($clase1, $clase2);


        function sumarObjetos($objeto1, $objeto2) {
            $totalMesas = $objeto1->getMesas() + $objeto2->getMesas();
            $totalSillas = $objeto1->getSillas() + $objeto2->getSillas();
            $totalOrdenadores = $objeto1->getOrdenadores() + $objeto2->getOrdenadores();

            $claseFinal = new Clase($totalMesas, $totalSillas, $totalOrdenadores);
            echo $claseFinal;
        }




    




?>