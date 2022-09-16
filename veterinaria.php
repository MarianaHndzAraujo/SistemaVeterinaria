<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <title>Doc-Tor</title>

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="images/logo.png">

  <link rel="stylesheet" href="css/style1.css">

  <?php
      session_start();
      $Usession= $_SESSION['usuarioS'];

      if ($Usession == null || $Usession == '') {
        echo '<script> alert("Acceso denegado: Inicia Sesion"); window.location="index.html"</script>';
      }
     ?>

</head>
<body>
<div class="navbar-fixed">
    <nav class="teal">
      <div class="container">
        <div class="nav-wrapper">
        <a href="#!" class="brand-logo right"><img src="images/image.png" alt="" width="60" height="auto" class="circle responsive-img"></img>
        
      </a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
           <ul class="left  hide-on-med-and-down">
           <li><a><h5><b>Dog-Tor</b></h5></a></li>
            <li><a href="veterinaria.php">Inicio</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Usuarios<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Productos<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><form method="post" action="controlador.php">
            <label class="light grey-text text-lighten-3"> <?php echo $_SESSION['usuarioS'] ?> </label>
            <button class="btn-floating  teal lighten-3" type="submit" name="btncerrar">X</button>
             
          </form></li>
          
          </ul>

          

          
        </div>
      </div>
    </nav>
  </div>
  <ul id="dropdown1" class="dropdown-content">
  <li><a href="registroUsuario.php">Registrar</a></li>
  <li><a href="consultaUsuario.php">Consultar</a></li>
</ul>
  <!-- Dropdown Structure -->
  <ul id="dropdown2" class="dropdown-content">
  <li><a href="registroProducto.php">Registrar</a></li>
  <li><a href="consultaProducto.php">Consultar</a></li>
  <li class="divider"></li>
  <li><a href="buscarProducto.php">Buscar</a></li>
</ul>

<!-- Section: Slider -->
<section class="slider">
    <ul class="slides">
      <li>
        <img src="images/cl.jpg" alt="">
        <div class="caption center-align">
          <h2>Todo lo que necesita tu mascota lo puedes encontrar aquí</h2>
          <h5 class="light grey-text text-lighten-3 hide-on-small-only">Tenemos una variedad enorme para todo tipo de mascotas.</h5>
          <a href="#" class="btn btn-large">Leer más</a>
        </div>
      </li>
      <li>
        <img src="images/cl1.jpg" alt="">
        <div class="caption left-align">
          <h2>Trabajamos con todo tipo de marcas</h2>
          <h5 class="light grey-text text-lighten-3 hide-on-small-only">Colaboramos con una variedad de marcas para que tengas muchas opciones a elegir.</h5>
          <a href="#" class="btn btn-large">Leer más</a>
        </div>
      </li>
      <li>
        <img src="images/cl2.jpg" alt="">
        <div class="caption right-align">
          <h2>Consiente a tu mascota</h2>
          <h5 class="light grey-text text-lighten-3 hide-on-small-only">Demuéstrale a tu mascota lo mucho que la adoras aquí.</h5>
          <a href="#" class="btn btn-large">Leer más</a>
        </div>
      </li>
    </ul>
  </section>

  <!-- Section: Search -->
  <section id="search" class="section section-search teal darken-1 white-text center scrollspy">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h3>Buscar tiendas</h3>
          <div class="input-field">
            <input class="white grey-text autocomplete" placeholder="Aruba, Cancun, etc..." type="text" id="autocomplete-input">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Icon Boxes -->
  <section class="section section-icons grey lighten-4 center">
    <div class="container">
      <div class="row">
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons large teal-text">room</i>
            <h4>Ubicación en todos lados</h4>
            <p>Contamos con sucursales en todas partes del mundo para que tengas el mejor acceso posible.</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons large teal-text">store</i>
            <h4>Excelentes tiendas</h4>
            <p>Nos preocupamos por la calidad de nuestras tiendas, es por ello que siempre te garantizaremos un excelente trato a ti y a tu mascota.</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons large teal-text">airplanemode_active</i>
            <h4>Envíos a todos lados</h4>
            <p>Realizamos envíos a cualquier destino para asegurar que tu producto llegue sin importar la distancia.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Popular -->
  <section id="popular" class="section section-popular scrollspy">
    <div class="container">
      <div class="row">
        <h4 class="center">
          <span class="teal-text">Lugares</span> Populares</h4>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="https://image.ibb.co/hbEMux/resort1.jpg" alt="">
              <span class="card-title">Cancún, México</span>
            </div>
            <div class="card-content">
              <p>Contamos con sucursales en el famoso destino de Cancún, México. Para que incluso aunque estés descansando tengas la seguridad de que tu mascota siempre se encuentre bien.
              </p>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="https://image.ibb.co/mn1egc/resort2.jpg" alt="">
              <span class="card-title">Las Bahamas, USA</span>
            </div>
            <div class="card-content">
              <p>Incluso aunque estés fuera del país, nuestros servicios y productos llegan a otros países para que sigas contando con nuestro servicio.
              </p>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="https://image.ibb.co/mbCVnH/resort3.jpg" alt="">
              <span class="card-title">Oaxaca, México</span>
            </div>
            <div class="card-content">
              <p>Aún cuando estés lejos de la capital, nosotros seguiremos a tu alcance para asegurarnos que tú y tu mascota tengan lo mejor.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col s12 center">
          <a href="#contact" class="btn btn-large grey darken-3">
            <i class="material-icons left">send</i>Haz click aquí para recibir más información
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Follow -->
  <section class="section section-follow teal darken-2 white-text center">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h4>¡Síguenos!</h4>
          <p>Busca nuestras redes sociales para mantenerte al tanto de nuestras novedades, noticias, promociones, entre otras cosas asombrosas.</p>
          <a href="htttps://facebook.com" target="_blank" class="white-text">
            <i class="fab fa-facebook fa-4x"></i>
          </a>
          <a href="htttps://twitter.com" target="_blank" class="white-text">
            <i class="fab fa-twitter fa-4x"></i>
          </a>
          <a href="htttps://linkedin.com" target="_blank" class="white-text">
            <i class="fab fa-linkedin fa-4x"></i>
          </a>
          <a href="htttps://googleplus.com" target="_blank" class="white-text">
            <i class="fab fa-google-plus fa-4x"></i>
          </a>
          <a href="htttps://pinterest.com" target="_blank" class="white-text">
            <i class="fab fa-pinterest fa-4x"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Gallery -->
  <section id="gallery" class="section section-gallery scrollspy">
    <div class="container">
      <h4 class="center">
        <span class="teal-text">Galería </span> de fotos
      </h4>
      <div class="row">
        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="images/m1.jpg" alt="">
        </div>
        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="images/m2.jpg" alt="">
        </div>
        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="images/m3.jpg" alt="">
        </div>
        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="images/m4.jpg" alt="">
        </div>
      </div>

      <div class="row">
        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="images/m15.jpg" alt="">
        </div>
        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="images/m6.jpg" alt="">
        </div>
        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="images/m7.jpg" alt="">
        </div>
        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="images/m8.jpg" alt="">
        </div>
      </div>

      <div class="row">
        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="images/m9.jpg" alt="">
        </div>
        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="images/m10.jpg" alt="">
        </div>
        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="images/m14.jpg" alt="">
        </div>
        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="images/m12.jpg" alt="">
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Contact -->
  <section id="contact" class="section section-contact scrollspy">
    <div class="container">
      <div class="row">
        <div class="col s12 m6">
          <div class="card-panel teal white-text center">
            <i class="material-icons medium">email</i>
            <h5>Regístrate para recibir cosas chulas</h5>
            <p>Por favor llene el siguiente formulario para tener un contacto más directo con nosotros si está interesado/a en recibir correos acerca de ofertas, eventos, regalos, entre otros.</p>
          </div>
          <ul class="collection with-header">
            <li class="collection-header">
              <h4>Ubicación</h4>
            </li>
            <li class="collection-item">Travelville Agency</li>
            <li class="collection-item">555 Beach rd, Suite 33</li>
            <li class="collection-item">Miami FL, 55555</li>
          </ul>
        </div>
        <div class="col s12 m6">
          <div class="card-panel grey lighten-3">
            <h5>Formulario de registro</h5>
            <div class="input-field">
              <input type="text" placeholder="Nombre" id="name">
              <label for="name">Nombre</label>
            </div>
            <div class="input-field">
              <input type="email" placeholder="Email" id="email">
              <label for="email">Email</label>
            </div>
            <div class="input-field">
              <input type="text" placeholder="Teléfono" id="phone">
              <label for="phone">Teléfono</label>
            </div>
            <div class="input-field">
              <textarea class="materialize-textarea" placeholder="Ciudad" id="message"></textarea>
              <label for="message">Ciudad</label>
            </div>
            <input type="submit" value="Envíar" class="btn">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Pie de Pagina-->
  <footer class="page-footer teal">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Doc-Tor</h5>
                <p class="grey-text text-lighten-4">Empresa dedicada a la venta de productos para mascotas.</p>
              </div>
              
            </div>
          </div>

          
          <div class="footer-copyright">
            <div class="container">
            © 2022 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
          
        </footer>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
            let elems = document.querySelectorAll('.dropdown-trigger');
            let options = {
                hover: true,
                coverTrigger: false,
            }
            let instances = M.Dropdown.init(elems, options);
        })
  </script>

<script>
    // Side Menu
const sideNav = document.querySelector('.sidenav');
M.Sidenav.init(sideNav, {});

// Slider
const slider = document.querySelector('.slider');
M.Slider.init(slider, {
    indicators: false,
    height: 500,
    transition: 500,
    interval: 6000
  });

// Scrollspy
const ss = document.querySelectorAll('.scrollspy');
M.ScrollSpy.init(ss, {});

// Material Boxed
const mb = document.querySelectorAll('.materialboxed');
M.Materialbox.init(mb, {});

// Auto Complete
const ac = document.querySelector('.autocomplete');
M.Autocomplete.init(ac, {
    data: {
      "Aruba": null,
      "Cancun Mexico": null,
      "Hawaii": null,
      "Florida": null,
      "California": null,
      "Jamaica": null,
      "Europe": null,
      "The Bahamas": null,
    }
  });
  </script>
  </body>
</html>
