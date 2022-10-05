<?php
function mayor_a_un_numero_dado($array1,$numero1){
	$long_array=count($array1);
	$indice=0;
	while ($indice<=$long_array-1){
		if($array1[$indice]>=$numero1){
		$array2[]=$array1[$indice];
		}
		$indice++;
	}
	return $array2;
}
?>