<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<meta charset="utf-8">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="images/logo.png">

  <link rel="stylesheet" href="css/registro1.css">
   
  <?php
    session_start();
    $Usession= $_SESSION['usuarioS'];

    if ($Usession == null || $Usession == '') {
      echo '<script> alert("Acceso denegado: Inicia Sesion"); window.location="index.html"</script>';
    }
   ?>

  <script src="js/validadorInputs.js"></script>
    <title>ACTUALIZAR USUARIO </title>

</head>

<body>
<div class="navbar-fixed">
    <nav class="teal">
      <div class="container">
        <div class="nav-wrapper">
        <a href="#!" class="brand-logo right"><img src="images/image.png" alt="" width="60" height="auto" class="circle responsive-img"></img></a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
           <ul class="left hide-on-med-and-down">
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

<div class="row">
  <div class="col s12 l4 offset-l4">
    <div class="card teal lighten-5">
      <div class="card-content">
        <h4 class="card-title center-align">Actualizar Usuario</h4>
        <form action="controlador.php"  method="POST" onsubmit="return vaciosRegistrar();">
        <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">account_circle</i>
              <input type="text" id="txtnombre" name="txtnombre" class="validate" value="<?php echo $_REQUEST['usuNombre'];?>"/>
              <label for="text">Nombre</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">mail_outline</i>
              <input type="email" id="txtcorreo" name="txtcorreo" class="validate" value="<?php echo $_REQUEST['usuR'];?>"/>
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">lock_outline</i>
              <input type="password" id="txtpass" name="txtpass" class="validate" value="<?php echo $_REQUEST['usuPass'];?>"/>
              <label for="password">Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">lock_outline</i>
              <input type="password" id="txtcpass" name="txtcpass" class="validate" value="<?php echo $_REQUEST['usuPass'];?>"/>
              <label for="password">Confirmar Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">streetview</i>
              <select name="selperfil" required>
                <option value="" disabled selected >Elije...</option>
                <option value="Empleado">Empleado</option>
                <option value="Administrador">Administrador</option>
              </select>
              <label>Perfil</label>
            </div>
          </div>
          <div class="row center-align">
          <div class="input-field col s12">
          <input type="hidden" name="txtidActualizar" value="<?php echo $_REQUEST['idR'] ?>">
            <button type="submit" name="btnAusu" class="btn waves-effect waves-light col s12">Actualizar Usuario</button>
          </div>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

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
        });
        </script>
      <script type="text/javascript">
          document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);
        });
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

        </script>

    </body>

</html>