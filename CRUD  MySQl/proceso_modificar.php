<?php

    include("conexion.php");
    $id=$_REQUEST['Id'];
    $placa=$_POST['Placa'];
    $nombre=$_POST['Nombre'];
    $color=$_POST['Color'];
    $precio=$_POST['Precio'];
    $imagen=addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));//Nos guarda la imagen en forma de bits

    $sql="UPDATE autos SET placa='$placa',nombre='$nombre',color='$color',precio='$precio',imagen='$imagen' WHERE id_auto='$id'";
    $resultado=$conexion->query($sql);//Estamos diciendo que nos almacene tanto el nombre como la imagen 

    if($resultado){
	   header("Location: mostrar.php");
    }else{
	   echo "No se inserto";
    }

?>