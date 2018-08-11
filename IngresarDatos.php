<?php
$Invocador=$_POST["Invocador"];
$Password=$_POST["Password"];
$Mail=$_POST["Mail"];
$Genero=$_POST["Genero"];
$Fecha=date("Nacimiento");

$Tabla="registrados";

include("Conectarse.php");

$InsertarDatos="INSERT INTO $Tabla (Invocador, Password, Mail, Genero, Nacimiento) VALUES ('$Invocador','$Password','$Mail','$Genero','$Fecha')";

$CHECK=mysqli_query($CONECTAR,"$InsertarDatos");
if($CHECK)
{
	echo "Registro Completado ";
}
else
{
	echo "Error en el registro ";
}
include("Desconectarse.php");
?>
