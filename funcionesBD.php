<?php
  function conectarBD(){
    $servidor="localhost";
    $baseDatos="bdveterinaria";
    $usuario="root";
    $contra="";

    $conexion=mysqli_connect($servidor,$usuario,$contra,$baseDatos)or die("No se pudo conectar");
    return $conexion;
  }

  function validarUsuario($usu,$cont){
    $conex=conectarBD();
    $consulta="select pass from tbusuarios where usuario='$usu'";

    try{
      $rsval= mysqli_query($conex,$consulta);
      $numerg= mysqli_num_rows($rsval);
      $regBd= mysqli_fetch_array($rsval);
      mysqli_close($conex);

      if( ( $numerg == 1 ) && ( $cont === $regBd['pass'] ) ){
        $status=1;

      }else{
          $status=0;

        }
        return $status;


    }catch(Exception $e){
      die('exception captura:'. $e->getMessage());
    }
  }

  function guardarUsuario($nombre,$usu,$cont,$per){

    $conex= conectarBD();
    $insertU="insert into tbusuarios(nombre, usuario,pass,perfil) values(?,?,?,?)";
    try {
      $stmt=$conex->prepare($insertU);
      $stmt->bind_param('ssss',$nombre,$usu,$cont,$per);
      $stmt-> execute();

      $stmt->close();
      mysqli_close($conex);

      $status=1;
      return $status;

    } catch (Exception $e) {
      die('exception captura:'. $e->getMessage());
    }

  }

  function consultaUsuarios(){
    $conex= conectarBD();
    $selectU= "select * from tbusuarios";

    try {
      $rsUsuarios= mysqli_query($conex,$selectU);
      mysqli_close($conex);

      return $rsUsuarios;

    } catch (Exception $e) {
      die('exception captura:'. $e->getMessage());
    }

  }

  function actualizarUsuario($idUsu,$nombre,$usu,$cont,$per){

    $conex= conectarBD();
    $update="update tbusuarios set nombre='$nombre',usuario='$usu',pass='$cont',perfil='$per' where idUsuario='$idUsu'";
    try {
      $stmt=$conex->prepare($update);
      $stmt-> execute();

      $stmt->close();
      mysqli_close($conex);

      $status=1;
      return $status;

    } catch (Exception $e) {
      die('exception captura:'. $e->getMessage());
    }

  }


  function eliminarU($idE){
    $conex= conectarBD();
    $deleteU="delete from tbusuarios where idUsuario= ?";

    try {
      $stmt = $conex->prepare($deleteU);
      $stmt -> bind_param('i',$idE);
      $stmt -> execute();
      $stmt -> close();
      mysqli_close($conex);

      $status=1;
      return $status;

    } catch (Exception $e) {
        die('exception al eliminar:'. $e->getMessage());
    }

  }

  ////////////////////////////////////////////  PRODUCTO  /////////////////////////////////////////////////////////////////////

  function guardarProducto($nombre,$descripcion,$cantidad,$tipo,$para,$precioA,$precioV){

    $conex= conectarBD();
    $insert="insert into tbalmacen(producto,descripcion,cantidad,tipo,para,precioAdquisicion,precioVenta) values(?,?,?,?,?,?,?)";
    try {
      $stmt=$conex->prepare($insert);
      $stmt->bind_param('ssdssdd',$nombre,$descripcion,$cantidad,$tipo,$para,$precioA,$precioV);
      $stmt-> execute();

      $stmt->close();
      mysqli_close($conex);

      $status=1;
      return $status;

    } catch (Exception $e) {
      die('exception captura:'. $e->getMessage());
    }

  }

  function consultaProducto(){
    $conex= conectarBD();
    $select= "select * from tbalmacen";

    try {
      $rsProducto= mysqli_query($conex,$select);
      mysqli_close($conex);

      return $rsProducto;

    } catch (Exception $e) {
      die('exception captura:'. $e->getMessage());
    }

  }

  function eliminarProducto($idE){
    $conex= conectarBD();
    $delete="delete from tbalmacen where idAlmacen= ?";

    try {
      $stmt = $conex->prepare($delete);
      $stmt -> bind_param('i',$idE);
      $stmt -> execute();
      $stmt -> close();
      mysqli_close($conex);

      $status=1;
      return $status;

    } catch (Exception $e) {
        die('exception al eliminar:'. $e->getMessage());
    }

  }


  function actualizarProducto($idP,$nombre,$descripcion,$cantidad,$tipo,$para,$precioA,$precioV){

    $conex= conectarBD();
    $update="update tbalmacen set producto='$nombre',descripcion='$descripcion',cantidad='$cantidad',tipo='$tipo'
              ,para='$para',precioAdquisicion='$precioA',precioVenta='$precioV' where idAlmacen='$idP'";
    try {
      $stmt=$conex->prepare($update);
      $stmt-> execute();

      $stmt->close();
      mysqli_close($conex);

      $status=1;
      return $status;

    } catch (Exception $e) {
      die('exception captura:'. $e->getMessage());
    }

  }

  



 ?>
