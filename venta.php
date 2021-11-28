<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM ventas";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> CRUD ventas de smart</title>
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

                                    <input type="text" class="form-control mb-3" name="idventa" placeholder="idventa">
                                    <input type="text" class="form-control mb-3" name="Vendedor" placeholder="Vendedor">
                                    <input type="text" class="form-control mb-3" name="Fecha" placeholder="Fecha">
                                    <input type="text" class="form-control mb-3" name="Direccion" placeholder="Direccion">
                                    <input type="text" class="form-control mb-3" name="Vendido" placeholder="Vendido">
                                    <input type="text" class="form-control mb-3" name="Pago" placeholder="Pago">
                                    <input type="text" class="form-control mb-3" name="Metodo" placeholder="Metodo">
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/proyecto_Delossantos_smart/Index.php">Inicio</a></li>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>idventa</th>
                                        <th>Vendedor</th>
                                        <th>Fecha</th>
                                        <th>Direccion</th>
                                        <th>Vendido</th>
                                        <th>Pago</th>
                                        <th>Metodo</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idventa']?></th>
                                                <th><?php  echo $row['Vendedor']?></th>
                                                <th><?php  echo $row['Fecha']?></th>
                                                <th><?php  echo $row['Direccion']?></th> 
                                                <th><?php  echo $row['Vendido']?></th> 
                                                <th><?php  echo $row['Pago']?></th> 
                                                <th><?php  echo $row['Metodo']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['idventa'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idventa'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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