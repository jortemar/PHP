<?php
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

// metemos la serie en un array de series que alojaremos en $_SESSION
//array_push($_SESSION['series'], $arrNumeros);

if (isset($POST['respuesta'])) {
    if ($POST['respuesta'] == 'Sí') {
        header("Location: 1.formulario.php");
    } else if ($POST['respuesta'] == 'No') {
        header("Location: 4.operaciones.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Tercera página formulario </title>
</head>
<body>
    <!-- Introduciendo un cero rompemos el bucle
    y saltamos al archivo 'operaciones.php' -->
    <form action="./3.repetir_serie.php" method="POST">
        <label for="num"> ¿Desea introducir otra serie? </label>
        <input type="input" name="respuesta" value="Sí" />
        <input type="input" name="respuesta" value="No" />
    </form>
</body>
</html>