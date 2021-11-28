<?php

include("conexion.php");
$con=conectar();

$idventa=$_GET['id'];

$sql="DELETE FROM ventas  WHERE idventa='$idventa'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: venta.php");
    }
?>
