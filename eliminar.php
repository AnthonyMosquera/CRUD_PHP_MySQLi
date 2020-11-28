<?php
    include ('config/conexion.php');

    $id = $_GET['id'];

    $query = mysqli_query($conn, "DELETE FROM producto WHERE (idproducto = '$id')");

    if($query)
    {
        header('location: index.php');
    }

?>