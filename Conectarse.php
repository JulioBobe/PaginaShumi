<?php

$host="localhost";
$user="root";
$pass="";
$BaseDatos="Lolsito";

$CONECTAR=mysqli_connect($host,$user,$pass,$BaseDatos);
if($CONECTAR)
{
	echo "Conecxion con el servidor exitosa \n";
}
else
{
	echo "Problemas al conectar con el servidor \n";
}

?>