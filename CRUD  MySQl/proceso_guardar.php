<?php
include("conexion.php");

$placa=$_POST['placa'];
$nombre=$_POST['nombre'];
$color=$_POST['color'];
$precio=$_POST['precio'];
$imagen=addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));//Nos guarda la imagen en forma de bits

$sql="INSERT INTO autos(placa,nombre,color,precio,imagen) VALUES('$placa','$nombre','$color','$precio','$imagen')";
$resultado=$conexion->query($sql);//Estamos diciendo que nos almacene tanto el nombre como la imagen 

if($resultado){
	header("Location: mostrar.php");
}else{
    echo "No se inserto";
}



?>