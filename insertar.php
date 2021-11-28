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


$sql="INSERT INTO ventas VALUES('$idventa','$Vendedor','$Fecha','$Direccion','$Vendido','$Pago','$Metodo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: venta.php");
    
}else {
}
?>