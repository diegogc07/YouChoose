<!doctype html>
<?php session_start();?>
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


<title>Validar Login</title>

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
//Obtiene los datos del formulario
$email=$_POST["email"];
$passwordLog=$_POST["password"];
$passwordLog = md5($passwordLog);
include("conectar.php");
//Consulta la base de datos
$consultaEmail = "select correo from alumnos where correo like '$email'";
$ejecutar_consulta = $conexion->query($consultaEmail);
$num_registros = $ejecutar_consulta->num_rows;
//Verifica si el correo está en la base de datos
if($num_registros == 1){
    $consultaPassword = "select password, nombre, codigo, carrera, activo from alumnos where correo like '$email'";
	$ejecutar_consulta = $conexion->query($consultaPassword);
	while($registro = $ejecutar_consulta->fetch_assoc()){
		$password = $registro['password'];
		$nombre = $registro['nombre'];
		$codigo = $registro['codigo'];
		$status = $registro['activo'];
		$carrera = $registro['carrera'];
	}
	//Verifica si la contraseña es correcta
	if($password == $passwordLog && $status == 1){
	    echo "OK";
		$_SESSION['usuario'] = $nombre;
		$_SESSION['id'] = $codigo;
		$_SESSION['carrera'] = $carrera;
		header ('location: Pagina_inicio.php');
	}else{
		if($status == 0){
			echo "<p>&nbsp;</p> <p>&nbsp;</p></p>
			      <div class='container-fluid w-25 text-center shadow contenedor'>
			      <h5> No has activado tu cuenta, activala para poder iniciar sesión </h5> 
				  <img src='imagenes/iconos/activar-cuenta.png' height='320' alt='' class=''>
				  <br><a href='Login.php'> Volver </a> <p>&nbsp; </div>";
		} else {
			echo "<p>&nbsp;</p> <p>&nbsp;</p> 
			      <div class='container-fluid w-25 text-center shadow contenedor'>
				  <h4> Correo electrónico/Contraseña incorrecta </h4>
				  <img src='imagenes/iconos/correo-contraseña-incorrecta.png' height='320' alt='' class=''>
				  <a href='Login.php'> Volver </a> <p>&nbsp; </div>";
		}
	    
	}
}else{    

    echo "<p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p>
	      <div class='container-fluid w-25 text-center shadow contenedor'>
		  <h4>El usuario no esta registrado</h4> 
		  <img src='imagenes/iconos/Usuario-no-registrado.png' height='290' alt='' class=''>
	      <a href='regist.php'> Registrarme </a> <p>&nbsp;  </div>";
}

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>
