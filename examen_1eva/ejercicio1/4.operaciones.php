<?php

/*si hemos introducido cinco valores en el array
el valor de la sesión debe ser 5. No obstante el último
valor del array lo desechamos, porque es el número cero que hemos 
utilizado para salir del bucle y no lo queremos en el array.
Por eso le quitamos uno a $i. */

session_start();
$i = $_SESSION['indice'];
$i = $i-1;  // 
$j = 0;
$arrNumeros = array();

// volcamos los datos del array superglobal $_SESSION a $arrNumeros
while ($j <= $i) {
	$arrNumeros[$j] = $_SESSION['num'.$j];
	$j++;
}

// para comprobar si el array se ha hecho bien o no
// print_r($arrNumeros).'<br>';

// calculamos suma 
$suma = 0;
foreach ($arrNumeros as $valor) {
    $suma += $valor;
}

// calculamos media
$media = $suma / count($arrNumeros);

// calculamos mediana (posición central del array)
$divEntreDos = count($arrNumeros) / 2;
$valorMediana = round($divEntreDos);
$mediana = $arrNumeros[$valorMediana];

//calculamos varianza
/* suma de cada uno de los valores del array menos la media de todos ellos.
todo eso al cuadrado. El resultado de eso hay que dividirlo
por la longitud del array menos uno. Después de todo habrá que hacer
la raiz cuadrada del resultado para sacar la varianza */
$varianza = sqrt((pow(($suma + $media), 2)) / (count($arrNumeros) - 1)); 

//calculamos moda
// la moda será el valor que más se repite dentro del array 
$cuenta = array_count_values($arrNumeros);
arsort($cuenta);
$moda = key($cuenta);


$arrResultado = [
    "suma" => $suma,
    "media" => $media,
    "mediana" => $mediana,
    "varianza" => $varianza,
    "moda" => $moda,
];

/* Utilizamos print_r para mostrar el resultado para 
comprobar que tanto la clave como el valor son correctas */
print_r($arrResultado);
