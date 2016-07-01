<!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <title>Mostrar Imagen</title>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
	<script>
	// JAVASCRIPT
		function mostrarSugerencia(nombre){
	// JQuery
			$.ajax({
				url: 'servidor.php',
				type: 'POST',				
				data: {datos: nombre},
			})
			.done(function(respuesta) {
        
				$('#txtSugerencias').text(respuesta);
			});
		}
	</script>	
	
    <table border="1" align="center">
	<thead><!--Cabezera de la tabla-->
            <tr>
            	<th colspan="1"><a href="formulario.php">Ingresar nuevo auto<a/></th>
                <th colspan="5">Lista de Usuarios</th>
            </tr>
            	
            </thead>
    <thead><!-- Cabezera de la tabla-->
        	<tr>
            	<th>Placa</th>
            	<th>Nombre</th>
                <th>Color</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>Operaciones</th>
            </tr>
        </thead>
        <tbody><!--Cuerpo de la tabla-->
		
		<marquee bgcolor="#FFFFFF" width="100%" scrolldelay="100" scrollamount="5" direction="right" loop="infinite">ALQUILE SU AUTO.</marquee>
		<center>
			<p><b>Escribe un Nombre Abajo:</b></p>

	Nombre: <input type="text" onkeyup="mostrarSugerencia(this.value)">

	<p>Sugerencias: <span id="txtSugerencias"></span></p>
		</center>
		

        <?php 
		
			include("conexion.php");
			$query="SELECT *FROM autos";
			$resultado=$conexion->query($query);
			while($row = $resultado->fetch_assoc()){
				?>
                <tr>
                					<td><?php echo $row['placa'];?></td>
                                 	<td><?php echo $row['nombre'];?></td>
                                    <td><?php echo $row['color'];?></td>
                                    <td><?php echo $row['precio'];?></td>
                                    <td><img height="150px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>"/></td>
                                    <th><a href="modificar.php?Id=<?php  echo $row['id_auto'];?>"/>Modificar</th>
                                    <th><a href="eliminar.php?Id=<?php echo $row['id_auto'];?>">Eliminar</a></th>
                   
                </tr>
                <?php
                }
                $consulta ="SELECT MAX(precio), MIN(precio) from autos";
                $resultado=$conexion->query($consulta);
                while($row = $resultado->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $row['MAX(precio)'];?></td>
                        <td><?php echo $row['MIN(precio)'];?></td>
                        
                    </tr>
                <?php        
                }
			?>
        
        </tbody>
    
    
    </table>
    	
    
	
</body>
</html>