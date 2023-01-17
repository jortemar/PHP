<?php
function crearProducto($nombre, $categoria_id)
{
    // Compruebo si la categoría existe
    $query = "SELECT * FROM Categorias WHERE id = '$categoria_id'";
    $result = mysqli_query($mysqli, $query);

    if (mysqli_num_rows($result) == 0)
    {
        echo 'Esta categoría no existe.';
    }
    else
    {
        // Inserto el producto 
        $query = "INSERT INTO Productos (nombre, categoria_id) VALUES ('$nombre', '$categoria_id')";
        mysqli_query($mysqli, $query);
    }
}
/* 3. (3)A la vista de la aplicación de pedidos. Se pide crear un
producto para una determinada categoría (La categoría debe existir) */


?>