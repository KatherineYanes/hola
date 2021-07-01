<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="usuarios";
$user=$_POST['usuario'] ?? "";
$pass=$_POST['contraseña'] ?? "";
$tipo=$_GET['Tipo'] ?? "";

$conn = mysqli_connect($dbhost,$dbuser, $dbpass, $dbname);
if(!$conn)
{
  die("No hay conexion: ".mysqli_connect_error());
}

$query=mysqli_query($conn, "SELECT * FROM login WHERE usuario = '".$user."' and password ='".$pass."'");
$nr=mysqli_num_rows($query);

if($nr==1)
{
  echo "Hola";
}
else if($nr == 0)
{
  echo "Usuario y Contraseña No Coinciden";
}


 ?>
