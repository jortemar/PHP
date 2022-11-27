<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- necesitamos el atributo enctype y su contenido
    para configurar el formulario como subida de fichero -->
    <form action="14.subida_ficheros(2).php" method="POST"
        enctype = "multipart/form-data">
        <!-- tipo 'file' para seleccionar archivo -->
        <input type = "file" name = "fichero" >
        <br><br>
        <!-- botón con el texto 'subir fichero' -->
        <input type = "submit" value = "Subir fichero" >
    </form>
</body>
</html>