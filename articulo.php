<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM articulos";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> CRUD articulos de smart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="idarticulo" placeholder="idarticulo">
                                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="Cantidad" placeholder="Cantidad">
                                    <input type="text" class="form-control mb-3" name="Precio" placeholder="Precio">
                                    <input type="text" class="form-control mb-3" name="Marca" placeholder="Marca">
                                    <input type="text" class="form-control mb-3" name="Empresa" placeholder="Empresa">
                                    <input type="text" class="form-control mb-3" name="TipoProducto" placeholder="TipoProducto">
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/proyecto_Delossantos_smart/Index.php">Inicio</a></li>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>idarticulo</th>
                                        <th>Nombre</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                        <th>Marca</th>
                                        <th>Empresa</th>
                                        <th>Tipo De Producto</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idarticulo']?></th>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['Cantidad']?></th>
                                                <th><?php  echo $row['Precio']?></th> 
                                                <th><?php  echo $row['Marca']?></th>  
                                                <th><?php  echo $row['Empresa']?></th>
                                                <th><?php  echo $row['TipoProducto']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['idarticulo'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idarticulo'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>