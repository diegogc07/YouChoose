<!doctype html>
<?php session_start();
  if(isset($_SESSION['usuario'])){
    header ('location: Pagina_inicio.php');
  }
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Glory&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300&display=swap" rel="stylesheet">
	
	<script src="https://kit.fontawesome.com/61d3958439.js" crossorigin="anonymous"></script>

    <title>Registro</title>
	
	<script type="text/JavaScript">

function ValidarFormulario() {
codigo = document.registro.codigo.value;
codigo = ValidarEntero(codigo);
password = document.registro.password.value;
passwordConf = document.registro.passwordConfirm.value;
password = ValidarPassword(password, passwordConf);
document.registro.codigo.value = codigo;

  if(codigo==""){
  	alert("El campo (código) debe contener un código valido");
	document.registro.codigo.focus();
	return 0;
  }
  
  if(!document.registro.correo.value.includes("@alumnos.udg.mx")){
  	alert("Debe contener un correo valido");
	document.registro.correo.focus();
	return 0;
  }
  
  if(document.registro.carrera.selectedIndex==0){
  	alert("Debe seleccionar una carrera");
	document.registro.carrera.focus();
	return 0;
  }
  
  if(password == ""){
  	alert("Las contraseñas no coinciden");
  	return 0;
  }
  
  document.registro.submit();
}

function ValidarEntero(valor){ // Verifica si el c�digo introducido son valores numericos
	valor = parseInt(valor);
	if(isNaN(valor)){
		return "";
	} else {
		return valor;
	}
}

function ValidarPassword(password, password2){ // Verifica que la contrase�a de los 2 campos sean iguales
	if(password == password2){
		return password;
	} else {
		return "";
	}
}//-->
</script>

<style>

.fondo {
      height: 100vh;
      background: -webkit-linear-gradient(to right,  hsla(120, 82%, 33%, 0.308), hsla(120, 82%, 33%, 0.308)), url(imagenes/Fondo-registro.jpg);  /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, hsla(120, 82%, 33%, 0.308), hsla(120, 82%, 33%, 0.308)), url(imagenes/Fondo-registro.jpg); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      
      background-size: cover;
      background-attachment: fixed;
      background-repeat: no-repeat;
     }

.text {
   color: #FFFFFF;
   font-family: 'Hind Madurai', sans-serif;
    }

  .texto-form{
      font-family: 'Glory', sans-serif;
    }

.registro {
   background-color:#FFFFFF;
   border-radius: 12px 12px 12px 12px;
          }


</style>

  </head>
  
  <body>

<div class="fondo">
<div class="text">
<h5 align="justify" class="w-50 mx-auto mb-2">&nbsp;</h5>
<h5 align="justify" class="w-50 mx-auto">Bienvenido(a) a nuestro sistema de valoraciones, aqu&iacute; podrás registrarte para tener completo acceso a todas las funciones.</h5>
<h5 align="justify" class="w-50 mx-auto">Asegurate de contestar con total honestidad. Debido que, toda la informaci&oacute;n ser&aacute; de gran ayuda para generaciones futuras.</h5>
</div>

<div class="registro container w-25 shadow mt-3 texto-form">
 <h2 class="text-center py-4">Registrate</h2>
 
<form id="registro" name="registro" method="post" action="insertar_alumno.php">
    <tr>
      <td>
	    <div class="mb-2">
          <div align="center">
            <input type="text" id="nickName" name="nickName" title="Introduce un nickname, este se mostrar&aacute; en los comentarios que realices" placeholder="Nombre" class="form-control" />
          </div>
        </div></td>
    </tr>
    <tr>
      <td width="193">        
        
		<div class="mb-2">
        <div align="center">
          <input name="codigo" type="text" id="codigo" title="C&oacute;digo: es el c&oacute;digo del estudiante proporcionado por la instituci&oacute;n" class="form-control" maxlength="9" placeholder="C&oacute;digo" />
      </div>
	  </div></td>
    </tr>
    <tr>
      <td>
	  <div class="mb-2">
	  <div align="center">
        <input name="correo" type="text" id="correo" title="El correo electr&oacute;nico debe ser &#13;el que te proporciona tu instituci&oacute;n (UDG) " placeholder="Email (ejemplo@alumnos.udg.mx)" class="form-control" />
      </div>
	  </div></td>
    </tr>
    <tr>
      <td>
	  <div class="mb-2">
	  <div align="center">
        <input name="password" title="Ingresa una contrase&ntilde;a" placeholder="Contrase&ntilde;a" type="password" id="password" class="form-control"/>
      </div>
	  </div></td>
    </tr>
    <tr>
      <td>
	  <div class="mb-2">
	  <div align="center">
        <input name="passwordConfirm" title="Confirme la contrase&ntilde;a" placeholder="Confirma Contrase&ntilde;a" class="form-control" type="password" id="passwordConfirm"/>
      </div>
	  </div></td>
    </tr>
    <tr>
      <td>
	  <div class="mb-2" align="center">
        <select name="carrera" id="carrera" class="form-select form-select-sm">
          <option><p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p>
		  <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p>
		  <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> 
		  <p>&nbsp;</p> <p>&nbsp;</p> --- Selecciona Carrera ---</option>
          <option value="INCO">Ingenier&iacute;a en computaci&oacute;n</option>
          <option value="INNI">Ingenier&iacute;a en Inform&aacute;tica</option>
        </select>
	  </div></td>
    </tr>
    <tr>
      <td>
	  <div class="d-grid col-12 mx-auto">
    <button class="btn btn-primary" name="Submit" onClick="ValidarFormulario()" value="Registrar" type="button">Registrar</button>
  </div></td>
    </tr>
	
	<div class="border-top border-1 border-dark mt-3 mb-2">
	</div>
	
	<p class="text-center mb-0">¿Ya tienes cuenta? <a href="Login.php" class="link-primary">Iniciar sesión</a></p>
  </form>
	  
  <p>&nbsp;</p>
  
 </div>
 </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
