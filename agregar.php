<?php
    include ('config/conexion.php');

    if(!empty($_POST['input_producto']))
    {
        $nombre = $_POST['input_producto'];
        $precio = $_POST['input_precio'];
        
        $query = mysqli_query($conn,"INSERT INTO producto (nombre, precio) VALUES ('$nombre', '$precio')");

        if($query)
        {
            header('location: index.php');
        }
    }

?>