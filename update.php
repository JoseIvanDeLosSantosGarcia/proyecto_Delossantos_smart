<?php

include("conexion.php");
$con=conectar();

$idventa=$_POST['idventa'];
$Vendedor=$_POST['Vendedor'];
$Fecha=$_POST['Fecha'];
$Direccion=$_POST['Direccion'];
$Vendido=$_POST['Vendido'];
$Pago=$_POST['Pago'];
$Metodo=$_POST['Metodo'];

$sql="UPDATE ventas SET  Vendedor='$Vendedor',Fecha='$Fecha',Direccion='$Direccion',Vendido='$Vendido',Pago='$Pago',Metodo='$Metodo' WHERE idventa='$idventa'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: venta.php");
    }
?>