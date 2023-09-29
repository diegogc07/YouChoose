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

    <title>Verificación</title>

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
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    $email = $_GET['email'];
    $hash = $_GET['hash'];

    $consulta = "select correo, hash, activo from alumnos where correo like '$email' AND hash like '$hash' AND activo='0'";
    $ejecutar_consulta = $conexion->query($consulta);
    $num_registros = $ejecutar_consulta->num_rows;
    echo "$num_registros";

    if($num_registros == 1){
        $modificar = "update alumnos set activo='1' where correo like '$email' AND hash like '$hash' AND activo='0'";
        $ejecutar_modificacion = $conexion->query($modificar);
        echo "<p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> 
              <div class='statusmsg container-fluid w-25 text-center shadow contenedor'>
              <h4>Tu cuenta fue activada exitosamente, ya puedes logearte</h4> 
              <img src='imagenes/iconos/activacion.png' height='285' alt='' class=''>
	          Puedes cerrar la pestaña sin ningún problema <p>&nbsp; </div>";
    }
} else {
    echo "url invalida";
}
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>