<?php
class Aula{
	private $sillas;
	private $mesas;
	private $ordenadores;
	function __construct($sillas,$mesas,$ordenadores){
		$this->sillas=$sillas;
		$this->mesas=$mesas;
		$this->ordenadores=$ordenadores;
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
	public function setSillas($s){
		$this->sillas = $s;
	}
	public function setMesas($s){
		$this->mesas = $s;
	}
	public function setOrdenadores($o){
		$this->ordenadores = $o;
	}
	public function __toString(){
		return "Aula: " .$this->sillas." ".$this->mesas." ".$this->ordenadores;
	}
	
	
}
$aula1=new Aula(20,10,40);
$silla=$aula1->getSillas();
$mesa=$aula1->getMesas();
$ordenador=$aula1->getOrdenadores();
$aula2=new Aula(10,7,6);
$silla1=$aula2->getSillas();
$mesa1=$aula2->getMesas();
$ordenador1=$aula2->getOrdenadores();
$total_sillas=$silla+$silla1;
$total_mesas=$mesa1+$mesa;
$total_ordenador=$ordenador+$ordenador1;
echo "el numero total de Sillas es $total_sillas<br>";
echo "el numero total de mesas es $total_mesas<br>";
echo "el numero total de ordenadores $total_ordenador<br>";


?>