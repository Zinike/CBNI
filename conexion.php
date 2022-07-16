<?php
$conn = mysqli_connect("localhost","u523579628_marcoszinga","Mfzv1994","u523579628_propiedades");
if(!$conn){
  echo "Connection error: " . mysqli_connect_error();
}


$ventalimited = "SELECT * FROM `venta` LIMIT 5";
$alquilerlimited = "SELECT * FROM `alquiler` LIMIT 5";

$venta = "SELECT * FROM `venta` ORDER BY `venta`.`LOCALIDAD` ASC";
$alquiler = "SELECT * FROM `alquiler` ORDER BY `alquiler`.`LOCALIDAD` ASC";
?>
