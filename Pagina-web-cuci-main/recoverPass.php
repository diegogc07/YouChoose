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

	<title>Recuperación</title>

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

		.contenedor-envio{
			background-color: #FFF;
			border-radius: 12px 12px 0 0;
		}

		.contenedor-envio2{
			background-color: #FFF;
			border-radius: 0 0 12px 12px;
		}

	</style>

  </head>
  <body>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);
//obtiene los datos del formulario
$email = $_POST["email"];
include ("conectar.php");

//consulta la base de datos
$consultaEmail = "select correo from alumnos where correo like '$email'";
$ejecutar_consulta = $conexion->query($consultaEmail);
$num_registros = $ejecutar_consulta->num_rows;
//Verifica si el correo electrónico está registrado en la base de datos
if($num_registros == 1){
	$consulta = "select * from alumnos where correo like '$email'";
	$ejecutar_consulta = $conexion->query($consulta);
	while($registro = $ejecutar_consulta->fetch_assoc()){
		$nick = $registro['nombre'];
		$codigo = $registro['codigo'];
		$carrera = $registro['carrera'];
		$hash = $registro['hash'];
	}
	echo "<p>&nbsp;</p> <p>&nbsp;</p>
	      <div class='container-fluid w-25 text-center shadow contenedor-envio'>
		  Te hemos enviado un mensaje a tu correo electrónico, revísalo para poder cambiar tu contraseña. </div>";
	try {
		//Configuracion del server
		$mail->isSMTP();                                            //Enviar usando SMTP
		$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		$mail->Username   = 'youchuus@gmail.com';                     //SMTP username
		$mail->Password   = 'bajajrizbtsswfsx';                               //SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
		$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
	
		//Recipients
		$mail->setFrom('youchuus@gmail.com', 'Equipo de Youchoose');
		$mail->addAddress($email);     //Add a recipient
	
		//Attachments
		//$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
		//$mail->addAttachment('baileVictoria.gif', 'procede a bailar bien loco');    //Optional name
	
		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = 'Recuperacion de contrasena';
		$mail->Body    = 'Hola '.$nick.', Recibiste este correo porque nos solicitaste recuperar tu contraseña.<br>
		Si no fuiste tu ignora este mensaje<br><br>
		Codigo: '.$codigo.'<br>
		Carrera: '.$carrera.'<br><br>
		Has click en el siguiente link para cambiar tu contraseña<br><br>
		http://localhost/Pagina-web-cuci-main/cambiarPassword.php?email='.$email.'&hash='.$hash;
		
	
		$mail->send();
		echo "<div class='container-fluid w-25 text-center contenedor-envio2'> 
		      Mensaje enviado exitosamente!
			  <img src='imagenes/iconos/Confirmacion.png' height='350' alt='' class=''>
			  <a href='Login.php'>Iniciar sesión </a> <p>&nbsp;</p> </div>";
	} catch (Exception $e) {
		echo "<br>El mensaje no se envio. Mailer Error: {$mail->ErrorInfo}";
	}
} else {
	echo "<p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p>  
	      <div class='container-fluid w-25 text-center shadow contenedor'>
	      <h4>Correo no registrado</h4> 
		  <img src='imagenes/iconos/no-registro.png' height='320' alt='' class=''> 
		  <a href='recuperacion.php'>Volver a intentarlo</a> <p>&nbsp;</p> </div>";
}
?>


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>