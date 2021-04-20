<?php
<?php
require 'conexion.php';
session_start();

$usuario = $_POST['usuario´];
$contraseña = $_POST['contraseña'];

$q = "SELECT COUNT(*) as contar from usuarios where usuario = '$usuario' and contraseña = '$contraseña' ";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
  $_SESSION['username'] = $usuario;
  header("index.php");
}else{
  echo "DATOS INCORRECTOS";
} 
?>