<!DOCTYPE html>
<html lang="es" dir="ltr">
<?php

$conn = mysqli_connect("localhost","u523579628_marcoszinga","Mfzv1994","u523579628_propiedades");


if(!$conn){
  echo "Connection error: " . mysqli_connect_error();
}

$sql = 'SELECT * FROM `venta` WHERE 2';

$resultado = mysqli_query($conn, $sql);

$propiedades = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

?>
<head>
  <meta charset="utf-8">
  <meta name="author" content="Marcos Zingaretti">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <title>CB Negocios Inmobiliarios</title>

  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="images/favicon.png">
</head>

<body>
  <!--- EL HEADER DE LA PAGINA - HEADER --->
  <header>
    <div class="contenedor">
      <img class="logo" src="images/logo.png" alt="logo">
      <img id="menu_icon" class="menu_icon" src="images/menu.png" alt="menu_icon" height="30px">
      <nav class="menu">
        <ul>
          <a href=#nosotros>¿Quiénes somos?</a>
          <a href=#propiedades>Propiedades</a>
          <a href=#contacto>Contacto</a>
        </ul>
      </nav>
    </div>
  </header>

  <!--- LA PRIMER SECCION DE LA PAGINA - HERO --->
  <section id="hero">
    <div class="hero">
      <img class="logo2" src="images/logo2.png" alt="logo">
    </div>
  </section>

  <!--- LA SEGUNDA SECCION DE LA PAGINA - NOSOTROS --->
  <section id="nosotros">
    <h2>Sobre Nosotros</h2>
    <h3>Somos una pequeña inmobiliaria brindando lo mejor de nosotros para que te sientas parte de nuestra familia.</h3>
  </section>

  <!--- LA TERCERA SECCION DE LA PAGINA - PROPIEDADES --->
  <section id="propiedades">
    <div class="contenedor">
      <h2>Nuestras Propiedades</h2>
      <form class="cards" action="index.html" method="post">
        <div class="card">
          <div class="card-text">
            <h3 name="titulo">Titulo</h3>
            <p>Descripción</p>
          </div>
        </div>
        <div class="card">
          <div class="card-text">
            <h3>Titulo</h3>
            <p>Descripcion</p>
          </div>
        </div>
        <div class="card">
          <div class="card-text">
            <h3>Titulo</h3>
            <p>Descripcion</p>
          </div>
        </div>
        <div class="card">
          <div class="card-text">
            <h3>Titulo</h3>
            <p>Descripcion</p>
          </div>
        </div>
        <div class="card">
          <div class="card-text">
            <h3>Titulo</h3>
            <p>Descripcion</p>
          </div>
        </div>
      </form>
    </div>
  </section>

  <!--- LA CUARTA SECCION DE LA PAGINA - CONTACTO --->
  <section id="contacto">
    <h2>Contacto</h2>
    <div class="contenedor">
      <ul>

        <h3>Llamanos</h3>

        <div class="telefono">
          <div class="Yuli">
            <a href="tel:5493584407187" target="_blank"><img class="icontelefono" src="images/telefono.png" alt="telefono" height="20px">Bottos Yuliana</a>
          </div>
          <div class="Malcom">
            <a href="tel:5493584418027" target="_blank"><img class="icontelefono" src="images/telefono.png" alt="telefono" height="20px">Campbell Malcom</a>
          </div>
        </div>

        <h3>Nuestras Redes</h3>

        <div class="redes">
          <div class="instagram">
            <a href="https://www.instagram.com/cbnegociosinmobiliarios/" target="_blank"><img class="iconinstagram" src="images/instagram.png" alt="intagram" height="20px">CBnegociosinmobiliarios</a>
          </div>

          <div class="whatsapp">
            <div class="Yuli">
              <a href="https://walink.co/7fee7b" target="_blank"><img class="iconwhatsapp" src="images/whatsapp.png" alt="whatsapp" height="20px">Yuliana</a>
            </div>
            <div class="Malcom">
              <a href="https://walink.co/b52d86" target="_blank"><img class="iconwhatsapp" src="images/whatsapp2.png" alt="whatsapp" height="20px">Malcom</a>
            </div>
          </div>
        </div>
      </ul>
    </div>
  </section>

  <!--- LA ULTIMA SECCION DE LA PAGINA --->
  <footer>
    <p>Todos los derechos reservados &#169 </p>
  </footer>
  <script src="script.js"></script>
</body>

</html>
