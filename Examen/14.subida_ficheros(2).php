<?php
/* los archivos subidos se almacenan en la variable (array en este caso)
superglobal $_FILES. Es un array bidimensional. La primera dimensión
hace alusión al nombre que le hemos dado al archivo en el formulario,
y en la segunda las claves son: name, size, type, tmp_name, y error */
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $peso = $_FILES["fichero"]["size"];

    if ($peso > 256 * 1024 * 1024) {
        echo "Demasiado grande";
        return;
    }

    echo "Nombre del fichero: ". $_FILES["fichero"]["name"]. '<br>';
    echo "Nombre temporal del fichero en el servidor: ". $_FILES["fichero"]["tmp_name"]. '<br>';

    /* el archivo se borra del servidor unos minutos después de haberlo subido.
    Podemos guardarlo (en este caso en la carpeta 'subidos') utilizando move_uploaded_file
    Sus parámetros son origen y destino */
    $exito = move_uploaded_file($_FILES["fichero"]["tmp_name"], "subidos/".$_FILES["fichero"]["name"]);
    echo '<br>';
    
    if ($exito) {
        echo "Fichero guardado";
    } else 
        echo "Error";
//}
?>