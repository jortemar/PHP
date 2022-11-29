<?php
session_start();
$i = $_SESSION['indice'];

if(!empty($_POST['num'])) 
{
	/* utilizamos el array superglobal $_SESSION para almacenar los números
	a la espera de introducirlos en el array definitivo en el siguiente archivo */
	$_SESSION['num'.$i]=$_POST['num'];
	$i++;
	$_SESSION['indice']=$i; //
}

//cuando se recibe un número negativo se ejecuta el header
if ($_POST['num'] < 0)
{
	header("Location: 03.form_ordenar.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insertar números</title>
</head>
<body>
    <!-- Introduciendo un número negativo rompemos el bucle
    y saltamos a la tercera página del formulario -->
    <form action="03.form_insertar.php" method="POST">
        <label for="num"> Introduzca un número </label>
        <input name="num" type="text" />
        <input type="submit" value="Almacenar" />

    </form>
    
</body>
</html>

