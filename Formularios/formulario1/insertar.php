<?php
    session_start();
    $i = $_SESSION['indice'];

    if (!empty($_POST['num'])) {
        $_SESSION['num'.$i] = $_POST['num'];
        $i++;
        $_SESSION['indice'] = $i;
    }

    if ($_POST['num'] < 0) {
        header("Location:ordenar.php");
    }
?>

<html>
<head>
    <title>Introduccion números del Array</title>
</head>
<body>
	<form action="insertar.php" method="post">
    	Introducir números: <br/>
        <input type="text" name="num" /> <br/>
        <input type="submit" value="enviar" />
    </form>
</body>
</html>
