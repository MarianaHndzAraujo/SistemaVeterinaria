<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title> Controlador </title>
  </head>
  <body>
    <?php
      require 'funcionesBD.php';
      if( isset( $_POST[ 'btningresar' ]) ){

        $usu= $_POST[ 'txtusuario' ];
        $cont= $_POST[ 'txtpass' ];

        $status= validarUsuario($usu,$cont);

        if($status === 1){

          session_start();
          $_SESSION['usuarioS']= $usu;

          echo "<script> alert('Bienvenido a Dog-tor'); window.location='veterinaria.php'</script>";

        }else{
          echo "<script> alert('Revisa tus credenciales'); window.location='index.html' </script>";
        }
      }

      if( isset( $_POST[ 'btnGusuario' ]) ){
        $nombre= $_POST[ 'txtnombre' ];
        $usu= $_POST[ 'txtcorreo' ];
        $cont= $_POST[ 'txtpass' ];
        $confi= $_POST[ 'txtcpass' ];
        $per= $_POST[ 'selperfil' ];

        if ( $cont === $confi ) {
          $status= guardarUsuario($nombre,$usu,$cont,$per);

          if ($status === 1) {
            echo "<script> alert('Usuario Guardado en BD'); window.location='consultaUsuario.php'</script>";
          } else {
            echo "<script> alert('Usuario NO Guardado en BD'); window.location='registroUsuarios.php'</script>";
          }

        } else {
          echo "<script> alert('Contraseñas no coinciden'); window.location='registroUsuarios.php' </script>";
        }
      }

      if( isset( $_POST[ 'btnAusu' ]) ){
        $idUsu= $_POST[ 'txtidActualizar'];
        $nombre= $_POST[ 'txtnombre' ];
        $usu= $_POST[ 'txtcorreo' ];
        $cont= $_POST[ 'txtpass' ];
        $confi= $_POST[ 'txtcpass' ];
        $per= $_POST[ 'selperfil' ];


          $status= actualizarUsuario($idUsu,$nombre,$usu,$cont,$per);

          if ($status === 1) {
            echo "<script> alert('Usuario Actualizado correctamente en BD'); window.location='consultaUsuario.php'</script>";
          } else {
            echo "<script> alert('Usuario NO Actualizado en BD'); window.location='registroUsuario.php'</script>";
          }
      }


      if(isset($_POST[ 'btnElimina'])){

        $idE= $_POST[ 'txtidElimina'];

        $stat= eliminarU($idE);
        if ( $stat === 1) {
          echo "<script> alert( 'Usuario eliminado en BD' ); </script>";
          echo "<script> window.location='consultaUsuario.php ';</script>";

        } else {
          echo "<script> alert( 'Usuario no eliminado' ); </script>";
          echo "<script> window.location='consultaUsuario.php'; </script>";
        }
      }

        if(isset($_POST[ 'btnRegreso'])){
          echo "<script> alert( 'Regresando' ); </script>";
          echo "<script> window.location='consultaUsuario.php'; </script>";
        }

        if(isset($_POST[ 'btncerrar'])){
          session_start();
          session_destroy();
          echo '<script> window.location="index.html"; </script>';
        }
/////////////////////////////////////////////////////// PRODUCTO ////////////////////////////////////////////////////////

        if( isset( $_POST[ 'btnGproducto' ]) ){
          $nombre= $_POST[ 'txtnombrep' ];
          $descripcion= $_POST[ 'txtdes' ];
          $cantidad= $_POST[ 'txtcant' ];
          $tipo= $_POST[ 'seltipo' ];
          $para= $_POST[ 'selpara' ];
          $precioA= $_POST[ 'txtprecioa' ];
          $precioV= $_POST[ 'txtpreciov' ];


            $status= guardarProducto($nombre,$descripcion,$cantidad,$tipo,$para,$precioA,$precioV);

            if ($status === 1) {
              echo "<script> alert('Producto Guardado en BD'); window.location='consultaProducto.php'</script>";
            } else {
              echo "<script> alert('Producto NO Guardado en BD'); window.location='registroProducto.php'</script>";
            }
        }

        if(isset($_POST[ 'btnEliminaP'])){

          $idE= $_POST[ 'txtidEliminaP'];

          $stat= eliminarProducto($idE);
          if ( $stat === 1) {
            echo "<script> alert( 'Producto eliminado en BD' ); </script>";
            echo "<script> window.location='consultaProducto.php ';</script>";

          } else {
            echo "<script> alert( 'Producto no eliminado' ); </script>";
            echo "<script> window.location='consultaProducto.php'; </script>";
          }
        }

          if(isset($_POST[ 'btnRegresoP'])){
            echo "<script> alert( 'Regresando' ); </script>";
            echo "<script> window.location='consultaProducto.php'; </script>";
          }

          if( isset( $_POST[ 'btnAproducto' ]) ){
            $idP= $_POST[ 'txtidActualizar'];
            $nombre= $_POST[ 'txtnombrep' ];
            $descripcion= $_POST[ 'txtdes' ];
            $cantidad= $_POST[ 'txtcant' ];
            $tipo= $_POST[ 'seltipo' ];
            $para= $_POST[ 'selpara' ];
            $precioA= $_POST[ 'txtprecioa' ];
            $precioV= $_POST[ 'txtpreciov' ];


              $status= actualizarProducto($idP,$nombre,$descripcion,$cantidad,$tipo,$para,$precioA,$precioV);

              if ($status === 1) {
                echo "<script> alert('Producto Actualizado correctamente en BD'); window.location='consultaProducto.php'</script>";
              } else {
                echo "<script> alert('Producto NO Actualizado en BD'); window.location='registroProducto.php'</script>";
              }
          }



     ?>
  </body>
</html>
