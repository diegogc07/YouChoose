<!doctype html>
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

    <title>Cambiar contraseña</title>

    <style>

    body{
		    font-family: 'Glory', sans-serif;
		    background: #1D976C;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #93F9B9, #1D976C);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #93F9B9, #1D976C); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	  }

    .contenedor{
		    background-color: #FFF;
		    border-radius: 12px 12px 12px 12px;
	  }

    </style>

  </head>
  <body>


<?php

include("conectar.php");
//Verifica si los valores enviado por el link de verificación están llenos
//Para después asignarlos a variables para las consultas
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    $email = $_GET['email'];
    $hash = $_GET['hash'];
    
    //Verifica si estan los datos en la base de datos
    $consulta = "select correo, hash, activo from alumnos where correo like '$email' AND hash like '$hash' AND activo='1'";
    $ejecutar_consulta = $conexion->query($consulta);
    $num_registros = $ejecutar_consulta->num_rows;
    
}?>

<!-- 
  Si los datos sí se encuentran en la base de datos, entonces muestra el formulario
  para introducir una nueva contraseña
 -->
<?php if($num_registros == 1):?>
  <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> 
  <div class="container-fluid w-25 text-center contenedor shadow">
  <h4 class="mb-3">Cambio de contraseña</h4>
  <form id="form1" name="form1" method="post" action="confCambiarPass.php">
   
  <div class="mb-3">
    <input type="text" name="email" value="<?= $email?>" readonly="readonly" size="30">
  </div>
    <div class="mb-3">
    <input type="text" name="newPassword" placeholder="Nueva contraseña"/>
  </div>
    <input type="submit" name="Submit" value="Cambiar" />
  </form>
  <p>&nbsp;</p>
  </div>  

<?php endif;?>
<!-- 
  Para que pueda cambiar la contraseña, el usuario debe tener su cuenta activada
 -->
<?php if($num_registros == 0):?>
  <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> 
  <div class="container-fluid w-25 text-center shadow contenedor">
   <h4>No has activado tu cuenta aún</h4>
   <img src="imagenes/iconos/cuenta-no-activa.png" width="380" height='250' alt="">
   <h5>Activala para poder cambiar tu contraseña </h5> <p>&nbsp;</p> 
  </div>
<?php endif;?>
<?php $conexion->close();?>
     

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>

