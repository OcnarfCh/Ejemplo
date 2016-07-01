<!doctype html>
<html>
<head>
<meta charset="utf-8">
 <LINK href="estiloAutos.css" rel="stylesheet" type="text/css">
<title>Index de Imagen</title>
</head>

<body>

	<center><br/><br/><br/>
    <form action="proceso_guardar.php" method="POST" enctype="multipart/form-data">
    <input type="text" REQUIRED name="placa" placeholder="Placa..." value=""/><br/><br/>
    <input type="text" REQUIRED name="nombre" placeholder="Nombre..." value=""/><br/><br/>
    <input type="text" REQUIRED name="color" placeholder="Color..." value=""/><br/><br/>
    <input type="text" REQUIRED name="precio" placeholder="Precio..." value=""/><br/><br/>
        <input type="file" REQUIRED name="Imagen" /><br/><br/>
        <input type="submit" value="Aceptar"/>
    
    </form>
    	
    </center>
</body>
</html>