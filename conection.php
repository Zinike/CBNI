<?php

$conn = mysqli_connect("localhost","u523579628_marcoszinga","Mfzv1994","u523579628_propiedades");


if(!$conn){
  echo "Connection error: " . mysqli_connect_error();
}

$sql = 'SELECT titulo,descripcion,id  FROM venta';

$resultado = mysqli_query($conn, $sql);

$propiedades = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

print_r($propiedades);
?>
