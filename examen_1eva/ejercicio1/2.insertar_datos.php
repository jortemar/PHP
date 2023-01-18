<?php
session_start();
$i = $_SESSION['indice'];

if(!empty($_POST['num'])) 
{
	/* utilizamos el array superglobal $_SESSION para almacenar los números
	a la espera de introducirlos en el array definitivo en el siguiente archivo */
	$_SESSION['num'.$i] = $_POST['num'];
	$i++;
	$_SESSION['indice'] = $i; 
}

//cuando se recibe un 0 el programa se va a la página de operaciones
if ($_POST['num'] == 0)
{
	header("Location: ./3.operaciones.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Segunda página formulario </title>
</head>
<body>
    <!-- Introduciendo un cero rompemos el bucle
    y saltamos al archivo 'operaciones.php' -->
    <form action="./2.insertar_datos.php" method="POST">
        <label for="num"> Introduzca otro número o un cero para cerrar </label>
        <input name="num" type="text" />
        <input type="submit" value="Almacenar" />
    </form>
</body>
</html>


