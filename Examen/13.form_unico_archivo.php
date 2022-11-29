<?php
/* cuando se pulsa el botón (submit) se envía el formulario y se 
da inicio al método POST. Entonces se ejecuta este código */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /* si va bien redirige a principal.php. Si no, se crea
    la variable $err, que la recogerá el bloque php que se 
    encuentra al principio del body */
    if ($_POST['usuario'] == "usuario" && $_POST['clave'] == "1234") {
        header("Location: principal.php");
    } else {
        $err = true;
    }
}
?>
<!-- El método GET se ejecuta cuando usuario y contraseña son correctos y se procede
a pedir la web al servidor. Por contra, en cada error de identificación se vuelve a
ejecutar el método POST -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario en un solo archivo</title>
</head>
<body>
    <?php if (isset($err)) {
        echo "Revise usuario y contraseña";
    } ?>
    <!-- el atributo action utiliza esta expresión para hacer una autollamada
    al fichero que estamos ejecutando -->
    <form method = "POST"
        action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >  <!-- el formulario se llamará a sí mismo al pulsar el botón -->
        <label for = "usuario"> Usuario </label> <!-- el atributo 'for' enlaza la etiqueta con el 'id' del input -->
        <input value = "<?php if(isset($usuario)) echo $usuario; ?>"
        id = "usuario" name = "usuario" type = "text">
        <label for = "clave"> Clave </label>
        <input id = "clave" name = "clave" type = "password">
        <input type = "submit">
    </form>
</body>
</html>