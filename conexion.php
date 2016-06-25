<?php
$server="mysql.hostinger.mx";
$usuario="u330732779_laura";
$password="vWxtJkD7m6";
$baseDatos="u330732779_pc";


//$server="localhost";
//$usuario="root";
//$password="";
//$baseDatos="pc";

$conexion=mysqli_connect($server, $usuario, $password,$baseDatos) or die("Error al conectarse al servidor de base de datos".mysqli_error());
//mysql_select_db($baseDatos,$conexion);
?>
