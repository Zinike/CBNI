<?php
$conn = mysqli_connect("localhost","u523579628_marcoszinga","Mfzv1994","u523579628_propiedades");
if(!$conn){
  echo "Connection error: " . mysqli_connect_error();
}

$venta = "SELECT * FROM `venta`";
$alquiler = "SELECT * FROM `alquiler`";
?>
