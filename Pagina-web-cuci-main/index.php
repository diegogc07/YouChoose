<?php
  session_start();
  if(!isset($_SESSION['usuario'])) {
        header('location: Login.php');
    }

    echo $_SESSION['usuario'];
?>

<a href="Logout.php">salir</a>