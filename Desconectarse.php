<?php

$Desconeccion=mysqli_close($CONECTAR); 
if($Desconeccion)
echo "Desconectado";
else 
echo "No se pudo desconectar";
?>
