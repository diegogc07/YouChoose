<?php
include('conectar.php');
$eliminar = "DELETE FROM comentarios
WHERE id = ".$_GET['id'];

$conexion->query($eliminar);
header('location:' .$_SERVER['HTTP_REFERER']);

?>