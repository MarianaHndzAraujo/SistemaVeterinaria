function vaciosLogin(){

var usuarioI = document.getElementById("txtusuario").value;
var contraI = document.getElementById("txtpass").value;

if(usuarioI == ""){
  alert("Escribe algo en campo usuario");
  return false;

}

if(contraI == ""){
  alert("Escribe algo en campo contraseña");
  return false;

}
}

function vaciosRegistrar(){

var correoI = document.getElementById("txtcorreo").value;
var contrarI = document.getElementById("txtpass").value;
var ccontrarI = document.getElementById("txtcpass").value;

if(correoI == ""){
  alert("Escribe algo en campo Correo Electronico");
  return false;
}

if(contrarI == ""){
  alert("Escribe algo en campo contraseña");
  return false;
}

if(ccontrarI == ""){
  alert("Escribe algo en campo confirmar contraseña");
  return false;
}

}

function vaciosProducto(){

  var nombrePro = document.getElementById("txtnombrep").value;
  var descripcionPro = document.getElementById("txtdes").value;
  var cantidadaPro = document.getElementById("txtcant").value;
  var tipoPro = document.getElementById("seltipo").value;
  var paraPro = document.getElementById("selpara").value;
  var precioaV = document.getElementById("txtprecioa").value;
  var preciovV = document.getElementById("txtpreciov").value;

  if(nombrePro == ""){
    alert("Escribe algo en campo nombre del Producto");
    return false;
  }

  if(descripcionPro == ""){
    alert("Escribe algo en campo Descripcion");
    return false;
  }

  if(cantidadaPro == ""){
    alert("Escribe algo en campo Cantidad");
    return false;
  }

  if(tipoPro == ""){
    alert("Selecciona algo en campo Tipo");
    return false;
  }

  if(paraPro == ""){
    alert("Selecciona algo en campo Para");
    return false;
  }

  if(precioaV == ""){
    alert("Escribe algo en campo precio de Adquisición");
    return false;
  }

  if(preciovV == ""){
    alert("Escribe algo en campo precio de Venta");
    return false;
  }
}
