<?php

/*si hemos introducido cinco valores en el array
el valor de la sesión debe ser 5. No obstante el último
valor del array lo desechamos, porque es el negativo que hemos 
utilizado para salir del bucle y no lo queremos en el array.
Por eso le quitamos dos a $i. Uno porque el índice está pasado un valor
y el otro para que no nos coja el valor negativo, que estaría en la
última posición */

session_start();
$i = $_SESSION['indice'];
$i = $i-2;  // 
$j = 0;
$arrNumeros = array();

while ($j <= $i) {
	$arrNumeros[$j] = $_SESSION['num'.$j];
	$j++;
}

echo "<br> Así queda ordenado el array de menor a mayor <br>";
$longitud = count($arrNumeros)-1;
$maximo = 0;

for ($i = 0; $i <= $longitud; $i++) {
    for ($i = 0; $i <= $longitud; $i++) {
        if ($arrNumeros[$i] >= $maximo) {
            $maximo = $arrNumeros[$i];
            $posicion = $i; 
        }  
    }    
    $aux = $arrNumeros[$longitud];
    $arrNumeros[$longitud] = $arrNumeros[$posicion];
    $arrNumeros[$posicion] = $aux;
    $maximo = 0;
    $longitud--;
    $i = 0;
}

echo "<br> El Array ordenado es el siguiente:<br>";

foreach ($arrNumeros as $valor) {
    echo $valor. '<br>';
}