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

    <title>Login</title>
	<script type="text/JavaScript">

</script>



<style>
     body{
	  font-family: 'Glory', sans-serif;
    background: #1D976C;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #93F9B9, #1D976C);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #93F9B9, #1D976C); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	  }

     .bg{  
	    background-image: url(imagenes/Portada_login.jpg);
		  background-position: center center;
		  background-repeat: no-repeat;
		  background-size: 840px 780px;
	 }

   .borde{
    border-radius: 12px 12px 12px 12px;
   }

</style>

  </head>
  
  <body>  
  
  <div class="container w-75 bg-light mt-4 shadow borde">
  <div class="row aling-items-stretch">
  <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">
  </div>
  
  <div class="col bg-white p-5 rounded-end">
      <div class="text-end">
	  <img src="imagenes/logo2.png" alt="Logo" width="45" height="60">
    </div>
	
	<h2 class="fw-bold text-center py-5">Bienvenido</h2>
	
<!-- ==================== -->
<!---- LOGIN ---->
<!-- ==================== -->

<form method="post" action="validarLog.php">
 <div class="mb-4">
   <label for="email" class="form-label">Correo electr&oacute;nico</label>
   <input type="email" class="form-control" name="email">
 </div>
 <div class="mb-4">
   <label for="password" class="form-label">Contrase&ntilde;a</label>
   <input type="password" class="form-control" name="password">
   </div>
 <div class="d-grid mt-4">
	<button type="submit" class="btn btn-primary">Iniciar Sesi&oacute;n</button>
 </div>
	
	<div class="my-3">
	 <span>&iquest;No tienes cuenta? <a href="regist.php">Registrate</a></span><br>
	 <span><a href="recuperacion.php">&iquest;Olvidaste tu contrase&ntilde;a?</a></span></div>
	</form>
	 
	</div>
   </div>
  </div>
    

    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script>
        var frames = window.parent.frames;
        frames[0].location.reload();
      </script>
    
  </body>
</html>


