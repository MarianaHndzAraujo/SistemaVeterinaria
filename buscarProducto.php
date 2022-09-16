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

   
  <?php
    session_start();
    $Usession= $_SESSION['usuarioS'];

    if ($Usession == null || $Usession == '') {
      echo '<script> alert("Acceso denegado: Inicia Sesion"); window.location="index.html"</script>';
    }
   ?>

  <script src="js/validadorInputs.js"></script>
    <title>BUSCAR PRODUCTO </title>

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
<h1 class="display-3 center-align"  style="color:dark;"><b> Buscar Producto</b> </h1>
<div class="container" class="row valign-wrapper">
  <div class="col s12 m7">
    <div class="card cyan lighten-5">
      <div class="card-content">
        <form action="" method="post">
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">archive</i>
              <input type="text" id="txtbv" name="txtbv" class="validate" />
              <label for="text">Escribe Nombre del Prodcuto</label>
              <button type="submit" name="btnbv" class="btn waves-effect waves-light col s12"> Buscar por Producto </button>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <select name="seltipo">
                <option value>Elije Tipo...</option>
                  <?php
                    require 'funcionesBD.php';
                    $rsPro= consultaProducto();
                    while ($valores = mysqli_fetch_array($rsPro)) {
                echo "<option value='".$valores['tipo']."'>".$valores['tipo']."</option>";
                    }
              echo "</select>";
            echo "<button type='submit' name='btnbc' class='btn waves-effect waves-light col s12'> Buscar por Tipo </button>
            </div>
          </div>
        </form>

        <table class='highlight centered responsive-table'>
          <thead class='teal lighten-4'>
            <tr>
            <th scope='col'>Nombre Producto</th>
            <th scope='col'>Descripción del Producto</th>
            <th scope='col'>Cantidad</th>
            <th scope='col'>Tipo</th>
            <th scope='col'>Mascota</th>
            <th scope='col'>Precio de Adquisición</th>
            <th scope='col'>Precio de Venta</th>

            </tr>
          </thead>
          <tbody>" ;

          $conex=conectarBD();
          if(isset($_POST[ 'btnbv' ])){
            $nombreV=$_POST[ 'txtbv' ];
            $query=mysqli_query($conex, "select * from tbalmacen where producto='$nombreV'");
            $row=mysqli_num_rows($query);
            if($row>0){
              while($fetch=mysqli_fetch_array($query)){
                echo"<tr>
                <td>".$fetch['producto']."</td>
                <td>".$fetch['descripcion']."</td>
                <td>".$fetch['cantidad']."</td>
                <td>".$fetch['tipo']."</td>
                <td>".$fetch['para']."</td>
                <td>".$fetch['precioAdquisicion']."</td>
                <td>".$fetch['precioVenta']."</td>
                </tr>";
                }
              }else{
                echo'
                <tr>
                <td colspan = "4"><center>Producto no Existe en la BD</center></td>
                </tr>';
                echo "<script>alert('Producto no Existe en la BD')</script>";
              }
            }else{
              if(isset($_POST[ 'btnbc' ])){
                $tipo=$_POST[ 'seltipo' ];
                $query=mysqli_query($conex, "select * from tbalmacen where tipo='$tipo'");
                $row=mysqli_num_rows($query);
                if($row>0){
                  while($fetch=mysqli_fetch_array($query)){
                    echo"<tr>
                    <td>".$fetch['producto']."</td>
                    <td>".$fetch['descripcion']."</td>
                    <td>".$fetch['cantidad']."</td>
                    <td>".$fetch['tipo']."</td>
                    <td>".$fetch['para']."</td>
                    <td>".$fetch['precioAdquisicion']."</td>
                    <td>".$fetch['precioVenta']."</td>
                      </tr>";
                    }
                  }else{
                    echo'
                    <tr>
                    <td colspan = "4"><center>Producto no Existe en la BD</center></td>
                    </tr>';
                  echo "<script>alert('Producto no Existe en la BD')</script>";
                  }

                }

            }

      ?>
      </tbody>
    </table>
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
                <h5 class="white-text">Dog-Tor</h5>
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