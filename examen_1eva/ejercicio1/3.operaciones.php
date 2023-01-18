<?php
/*si hemos introducido cinco valores en el array
el valor de la sesión debe ser 5. No obstante el último
valor del array lo desechamos, porque es el número cero que hemos 
utilizado para salir del bucle y no lo queremos en el array.
Por eso le quitamos uno a $i. */

session_start();
require "./4.clase.php";
$i = $_SESSION['indice'];
$i = $i-1;  // 
$arrNumeros = array();

// volcamos los datos del array superglobal $_SESSION a $arrNumeros
for ($z = 0; $z <= $i; $z++) {
    $arrNumeros[$z] = $_SESSION['num'.$z];
}

// para comprobar si el array se ha hecho bien o no
// print_r($arrNumeros).'<br>';
 
function calcularSuma($arrNumeros) {
    $suma = 0;
    foreach ($arrNumeros as $valor) {
        $suma += $valor;
    }
    return $suma;
}

function calcularMedia($arrNumeros) {
    $media = calcularSuma($arrNumeros) / count($arrNumeros);
    return $media;
}

function calcularMediana($arrNumeros) {
    $divEntreDos = count($arrNumeros) / 2;
    $valorMediana = round($divEntreDos);
    $mediana = $arrNumeros[$valorMediana];
    return $mediana;
}

function calcularVarianza($arrNumeros) {
    $varianza = sqrt((pow((calcularSuma($arrNumeros) + calcularMedia($arrNumeros)), 2)) / (count($arrNumeros) - 1)); 
    return $varianza;
}
/* suma de cada uno de los valores del array menos la media de todos ellos.
todo eso al cuadrado. El resultado de eso hay que dividirlo
por la longitud del array menos uno. Después de todo habrá que hacer
la raiz cuadrada del resultado para sacar la varianza */

function calcularModa($arrNumeros) {
    $cuenta = array_count_values($arrNumeros);
    arsort($cuenta);
    $moda = key($cuenta);
    return $moda;
}
// la moda será el valor que más se repite dentro del array 

$serie = new Matematicas(calcularSuma($arrNumeros), calcularMedia($arrNumeros), calcularMediana($arrNumeros), calcularVarianza($arrNumeros), calcularModa($arrNumeros));
echo $serie. '<br><br>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./1.formulario.php" method="POST">
        <label for="num"> Si quiere introducir otra serie pulse el botón. En caso contrario puede cerrar el programa </label>
        <br>
        <input type="submit" value="Quiero introducir otra serie" />
    </form>
</body>
</html>
