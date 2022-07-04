<?php
<<<<<<< HEAD
  include("propiedades.php")
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
=======
$servername = "localhost";
$username = "marcoszinga";
$password = "Mfzv1994";
$db = "propiedades";
>>>>>>> 08e3ce051cc1843d0633b009f394777bd272ecda

$enlace = mysqli_connect($servername, $username, $password, $db);

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_errno() . PHP_EOL;
    exit;
}

echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;

<<<<<<< HEAD
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

      <form class="cards" action="propiedades.php" method="post">
        <div class="card">
          <div class="card-text">
            <h3>$nombre</h3>
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
=======
mysqli_close($enlace);
?>
>>>>>>> 08e3ce051cc1843d0633b009f394777bd272ecda
