<?php
	class Aula{
		private $sillas;
		private $mesas;
		private $ordenadores;

		function __construct($sillas, $mesas,$ordenadores){
			$this->sillas = $sillas;
			$this->mesas = $mesas;
			$this->ordenadores = $ordenadores;
		}
		public function getSillas(){
			return $this->sillas;
		}
		public function getMesas(){
			return $this->mesas;
		}
		public function getOrdenadores(){
			return $this->ordenadores;
		}
		public function setSillas($sillas){
			$this->sillas = $sillas;
		}
		public function setMesas($mesas){
			$this->mesas = $mesas;
		}
		public function setOrdenadores($ordenadores){
			$this->ordenadores = $ordenadores;
		}
		public function __toString(){
			return "Aula: ". $this->sillas. " sillas, ". $this->mesas. " mesas, ". $this->ordenadores. " ordenadores";
		}
	}

	$aula1 = new Aula(20,10,40);
	$silla = $aula1->getSillas();
	$mesa = $aula1->getMesas();
	$ordenador = $aula1->getOrdenadores();

	$aula2 = new Aula(10,7,6);
	$silla1 = $aula2->getSillas();
	$mesa1 = $aula2->getMesas();
	$ordenador1 = $aula2->getOrdenadores();

	$total_sillas = $silla + $silla1;
	$total_mesas = $mesa1 + $mesa;
	$total_ordenador = $ordenador + $ordenador1;
	
	echo "El número total de sillas es $total_sillas <br>";
	echo "El número total de mesas es $total_mesas <br>";
	echo "El número total de ordenadores es $total_ordenador <br>";

	//modo alternativo usando una función

	function sumaObjetos($obj1, $obj2) {
		$total_sillas = $obj1->getSillas() + $obj2->getSillas();
		$total_mesas = $obj1->getMesas() + $obj2->getMesas();
		$total_ordenadores = $obj1->getOrdenadores() + $obj2->getOrdenadores();

		$objFinal = new Aula($total_sillas, $total_mesas, $total_ordenadores);
		return $objFinal;
	} 

	echo $aulaFinal = sumaObjetos($aula1,$aula2);

?>