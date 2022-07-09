<!DOCTYPE html>
<html lang="es" dir="ltr">

  <?php include("conexion.php"); ?>

  <head>
    <meta charset="utf-8">
    <meta name="author" content="Marcos Zingaretti">
    <meta name="description" content="CB Negocios Inmobiliarios">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <title>CB Negocios Inmobiliarios</title>

    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/favicon.png">
  </head>

  <body>
    <header>
      <div class="contenedor">
        <img class="logo" src="images/logo.png" alt="logo">
        <img id="menu_icon" class="menu_icon" src="images/menu.png" alt="menu_icon" height="30px">

        <nav class="menu">
          <ul>
            <a href=" #nosotros">Nosotros</a>
            <a href="#propiedades">Propiedades</a>
            <a href="#contacto">Contacto</a>
          </ul>
        </nav>
      </div>
    </header>


    <div id="preloader" class="preloader">
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <h2>FAVOR DE ESPERAR</h2>
    </div>


    <section id="hero">
      <video src="images/realstate.webm" muted autoplay loop></video>
    </section>

    <section id="nosotros">
      <h2>Sobre Nosotros</h2>
      <q cite="Marcos">Somos una pequeña inmobiliaria brindando lo mejor de nosotros para que te sientas parte de nuestra familia.</q>
    </section>

    <section id="propiedades">
      <h2>Nuestras Propiedades</h2>

      <h4>Alquiler</h4>
      <div class="contenedor">
        <form class="card">
          <?php $resultado = mysqli_query($conn, $alquiler);
            while ($row=mysqli_fetch_assoc($resultado)) {?>
          <div class="tarjeta">
            <div class="face front">
              <img src="<?php echo $row['FOTO'];?>" alt="imagen">
              <h4><?php echo $row['TIPO'];?></h4>
            </div>
            <div class="face back">
              <img src="<?php echo $row['FOTO'];?>" alt="imagen">
              <h4><?php echo $row['TIPO'];?><br><?php echo $row['LOCALIDAD'];?></h4>
              <p><?php echo $row['DESCRIPCION'];?></p>
            </div>
          </div>
          <?php }?>
          <?php mysqli_free_result($resultado);?>
        </form>
      </div>
      <br><br>

      <h4>Venta</h4>
      <div class="contenedor">
        <form class="card">
          <?php $resultado = mysqli_query($conn, $venta);
            while ($row=mysqli_fetch_assoc($resultado)) {?>
          <div class="tarjeta">
            <div class="face front">
              <img src="<?php echo $row['FOTOS'];?>" alt="imagen">
              <h4><?php echo $row['TIPO'];?></h4>
            </div>
            <div class="face back">
              <img src="<?php echo $row['FOTOS'];?>" alt="imagen">
              <h4><?php echo $row['TIPO'];?><br><?php echo $row['LOCALIDAD'];?></h4>
              <p><?php echo $row['DESCRIPCION'];?></p>
            </div>
          </div>
          <?php }?>
          <?php mysqli_free_result($resultado);?>
        </form>
      </div>
    </section>

    <section id="contacto">
      <h2>Contacto</h2>
      <div class="contenedor">
        <ul>
          <h3>Llamanos</h3>

          <div class="telefono">
            <div class="Yuli">
              <a href="tel:5493584407187" target="_blank">
                <button class="button" type="button" name="button">
                <img class="icontelefono" src="images/telefono.png" alt="telefono" height="20px">
                Bottos Yuliana
                </button>
              </a>
            </div>

            <div class="Malcom">
              <a href="tel:5493584418027" target="_blank">
                <button class="button" type="button" name="button">
                <img class="icontelefono" src="images/telefono.png" alt="telefono" height="20px">
                Campbell Malcom
                </button>
              </a>
            </div>
          </div>

          <h3>Nuestras Redes</h3>

          <div class="redes">
            <div class="instagram">
              <a href="https://www.instagram.com/cbnegociosinmobiliarios/" target="_blank">
                <button class="button" type="button" name="button">
                <img class="iconinstagram" src="images/instagram.png" alt="intagram" height="20px">
                CBnegociosinmobiliarios
                </button>
              </a>
            </div>

            <div class="whatsapp">
              <div class="Yuli">
                <a href="https://walink.co/7fee7b" target="_blank">
                  <button class="button" type="button" name="button">
                  <img class="iconwhatsapp" src="images/whatsapp.png" alt="whatsapp" height="20px">
                  Bottos Yuliana
                </button>
                </a>
              </div>

              <div class="Malcom">
                <a href="https://walink.co/b52d86" target="_blank">
                  <button class="button" type="button" name="button">
                  <img class="iconwhatsapp" src="images/whatsapp.png" alt="whatsapp" height="20px">
                  Campbell Malcom
                  </button>
                </a>
              </div>
            </div>
          </div>

          <div class="email">
            <a href="mailto: contacto@cbnegociosinmobiliarios.com" target="_blank">
              <button class="button" type="button" name="button">
              E-Mail
              </button>
            </a>
          </div>
        </ul>
      </div>
    </section>

    <footer>
      <p>Todos los derechos reservados &#169</p>
    </footer>

    <script src="script.js"></script>
    <script type="text/javascript">
      var loader = document.getElementById("preloader");
      window.addEventListener("load", function(){
        loader.style.display = "none";
      })

    </script>

  </body>
</html>
