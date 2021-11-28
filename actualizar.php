<?php 
    include("conexion.php");
    $con=conectar();
    
    $id=$_GET['id']; 

$sql="SELECT * FROM ventas WHERE idventa='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="idventa" value="<?php echo $row['idventa']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="Vendedor" placeholder="Vendedor" value="<?php echo $row['Vendedor']  ?>">
                                <input type="text" class="form-control mb-3" name="Fecha" placeholder="Fecha" value="<?php echo $row['Fecha']  ?>">
                                <input type="text" class="form-control mb-3" name="Direccion" placeholder="Direccion" value="<?php echo $row['Direccion']  ?>">
                                <input type="text" class="form-control mb-3" name="Vendido" placeholder="Vendido" value="<?php echo $row['Vendido']  ?>">
                                <input type="text" class="form-control mb-3" name="Pago" placeholder="Pago" value="<?php echo $row['Pago']  ?>">
                                <input type="text" class="form-control mb-3" name="Metodo" placeholder="Metodo" value="<?php echo $row['Metodo']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>