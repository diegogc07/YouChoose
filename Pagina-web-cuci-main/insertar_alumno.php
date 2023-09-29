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

    <title>Insertar alumno</title>

	<style>

        body{
			font-family: 'Glory', sans-serif;
			background: #1D976C;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #93F9B9, #1D976C);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #93F9B9, #1D976C); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
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
	$nombre=$_POST["nickName"];
	$codigo=$_POST["codigo"];
	$correo=$_POST["correo"];
	$carrera=$_POST["carrera"];
	$password=$_POST["password"];

	//Conexi�n a la base de datos

	include("conectar.php");
	$consulta = "select * from alumnos_activos where codigo='$codigo'";
	$ejecutar_consulta=$conexion->query($consulta);
	$num_registros=$ejecutar_consulta->num_rows;

	if($num_registros == 1){ // Verifica si el alumno existe en la base de datos
		$consulta = "select * from alumnos where codigo='$codigo'";
		$ejecutar_consulta=$conexion->query($consulta);
		$num_registros=$ejecutar_consulta->num_rows;

		if($num_registros == 0){ // Verifica si el c�digo del alumno ya se encuentra registrado en la p�gina
			$consulta = "select correo from alumnos where correo like '$correo'";
			$ejecutar_consulta=$conexion->query($consulta);
			$num_registros=$ejecutar_consulta->num_rows;

			if($num_registros == 0){ // Verifica si el correo del alumnos ya se encuentra registrado en la p�gina
				$consulta = "select nombre from alumnos where nombre like '$nombre'";
				$ejecutar_consulta=$conexion->query($consulta);
				$num_registros=$ejecutar_consulta->num_rows;

				if($num_registros == 0){ // Verifica si el nick del alumno ya se encuentra registrado en la base de datos
					if($password != ""){
						$password = md5($password);
						$hash = md5( rand(0, 2000));
						$insertar = "insert into alumnos values ('$nombre', '$codigo', '$correo', '$carrera', '$password', '$hash', '0')";
						$ejecutar_consulta=$conexion->query($insertar);
						echo "<p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p>
						      <div class='container-fluid w-25 text-center shadow contenedor-envio'>
						      Usuario registrado con exito </div>";
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
							$mail->addAddress($correo);     //Add a recipient
						
							//Attachments
							//$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
							
						
							//Content
							$mail->isHTML(true);                                  //Set email format to HTML
							$mail->Subject = 'Verificacion';
							$mail->Body    = 'Hola '.$nombre.', te damos la bienvenida a nuestra página de valoraciones.
							Te hemos enviado este correo electronico para saber que en realidad eres tu. <br>
							Necesitas confirmar que eres tu haciendo click en el siguiente link.<br>
							http://localhost/Pagina-web-cuci-main/verificacion.php?email='.$correo.'&hash='.$hash.'<br><br>
							Nombre de usuario: '.$nombre.'<br>
							Codigo: '.$codigo.'<br>
							Carrera: '.$carrera;
							
						
							$mail->send();
							echo "<div class='container-fluid w-25 text-center contenedor-envio2'> 
							      Ingresa a tu correo para activar tu cuenta
							      <img src='imagenes/iconos/usuario-registrado.png' height='260' alt='' class=''>
							      Mensaje enviado exitosamente! <p>&nbsp;</p> </div>";
						} catch (Exception $e) {
							echo "<br>El mensaje no se envio. Mailer Error: {$mail->ErrorInfo}";
						}
					}else {
						echo "<script> alert ('Introduce una contrasena')</script>";
					}
					
				} else {
					echo "<script> alert ('Este nick ya esta registrado, porfavor elige otro')</script>";
				}
				
			}else{
				echo "<script> alert ('Este correo electronico ya esta registrado')</script>";
			}
				
		} else {
			echo "<script> alert ('Este alumno ya esta registrado')</script>";
		}
	} else {
		echo "<script> alert ('Este alumno no se encuentra en la base de datos')</script>";
	}	
	$conexion->close();
	?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>