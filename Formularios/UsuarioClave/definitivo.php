<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if($_POST['usuario'] == "usuario" && $_POST['clave'] == 1234) {
            header("Location: principal.php");
        } else
            $error = true;
    }
?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de login</title>
</head>
<body>
    <?php
        if (isset($error)) {
            echo "<p> Revise usuario y contraseña </p>";
        }
    ?>
    <form method = "POST"
        action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for = "usuario"> Usuario </label>
        <input value = "<?php if (isset($usuario))echo $usuario;?>"
            id = "usuario" name = "usuario" type = "text">
        <label for ="clave"> Clave </label>
        <input id = "clave" name = "clave" type = "password">
        <input type = "submit">
    </form>    
</body>
</html>