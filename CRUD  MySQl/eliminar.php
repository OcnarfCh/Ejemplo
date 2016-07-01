<?php
include("conexion.php");

$id=$_REQUEST['Id'];



$query="DELETE  FROM autos WHERE id_auto='$id'";

$resultado=$conexion->query($query);//ponemos nuestra instruccion que tenemos en la variable query

if($resultado){
		header("location: mostrar.php");//guarda los datos directamente a la tabla
	}
	else{
		echo "Insercion no exitosa";
		}

?>