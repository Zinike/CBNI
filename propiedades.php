<?php

  include("conection_db.php");

  $consulta = INSERT INTO `alquiler`(`ID`, `DISPONIBILIDAD`, `FECHA DE ALTA`, `APELLIDO`, `NOMBRE`, `CONTACTO`, `CONTACTO 2`, `TIPO`, `LOCALIDAD`, `DIRECCION`, `DESCRIPCION`, `MONEDA`, `PRECIO`, `FOTOS`, `GPS`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]')
  $resultado = mysqli_query($conection_db,$consulta);

?>
