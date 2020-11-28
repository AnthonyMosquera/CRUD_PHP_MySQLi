<?php
    include ('config/conexion.php');
    $result = mysqli_query($conn,'SELECT * FROM producto');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Crud PHP - MySQL</title>
    <style>
        .n
        {
            margin-top: 100px;
        }
    </style>
</head>
<body>
    
    <div class="container n">
        <div class="row">

            <div class="col-lg-3">
                <form action="agregar.php" method="post">
                    <h1><strong>Prodúcto</strong></h1>
                    <br>
                    <input type="text" class="form-control" placeholder="Producto" require name="input_producto">
                    <br>
                    <input type="text" class="form-control" placeholder="Precio" require name="input_precio">
                    <br>
                    <input type="submit" value="Agregar" class="btn btn-primary">
                </form>
            </div>

            <div class="col-lg-8">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Prodúcto</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($result as $row)
                            {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $row['idproducto']; ?></th>
                            <td><?php echo $row['nombre']; ?></td>
                            <td>S/.<?php echo $row['precio']; ?></td>
                            <td><a href="editar.php?id=<?php echo $row['idproducto']; ?>" class="btn btn-primary">Editar</a></td>
                            <td><a href="eliminar.php?id=<?php echo $row['idproducto']; ?>" class="btn btn-danger">Eliminar</a></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>




