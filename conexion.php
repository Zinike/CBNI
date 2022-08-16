<?php
$conn = mysqli_connect("localhost","u523579628_marcoszinga","Mfzv1994","u523579628_propiedades");
if(!$conn){
  echo "Connection error: " . mysqli_connect_error();
}

$ventalimited = "SELECT * FROM `venta` ORDER BY `venta`.`ID` DESC LIMIT 5";
$alquilerlimited = "SELECT * FROM `alquiler` ORDER BY `alquiler`.`ID` DESC LIMIT 5";

$ventaall = "SELECT * FROM `venta` ORDER BY `venta`.`ID` DESC";
$alquilerall = "SELECT * FROM `alquiler` ORDER BY `alquiler`.`ID` DESC";
?>
