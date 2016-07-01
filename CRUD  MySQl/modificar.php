<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>GUARDAR</title>
</head>

<body>
    <center>
        <?php 
			$id=$_REQUEST['Id'];
echo $id;
			include("conexion.php");//primero incluimos el archivo de conexion
			$query="SELECT  *FROM autos WHERE id_auto='$id'";
			$resultado=$conexion->query($query);
			$row=$resultado->fetch_assoc();
		?>
            <form action="proceso_modificar.php?Id=<?php  echo $row['id_auto'];?>" method="post" enctype="multipart/form-data">
                <br/>
                <br/>
                <br/>

                <input type="text" required name="Placa" placeholder="Placa..." value="<?php echo $row[" placa "]; ?>"/>
                <br/>
                <br/>
                <input type="text" required name="Nombre" placeholder="Nombre..." value="<?php echo $row[" nombre "]; ?>"/>
                <br/>
                <br/>
                <input type="text" required name="Color" placeholder="Color..." value="<?php echo $row[" color "]; ?>"/>
                <br/>
                <br/>
                <input type="text" required name="Precio" placeholder="Precio..." value="<?php echo $row[" precio "]; ?>"/>
                <br/>
                <br/>
                <img height="150px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>" />
                <br/>
                <br/>
                <input type="file" REQUIRED name="Imagen" />
                <br/>
                <br/>
                <input type="submit" value="Aceptar" />

            </form>
    </center>
</body>

</html>