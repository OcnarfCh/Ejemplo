<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Mostrar Imagen</title>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>

</head>

<body>
<p><b>Escribe un Nombre Abajo:</b></p>

	Marca: <input type="text" onkeyup="mostrarSugerencia(this.value)">

	<p>Sugerencias: <span id="txtSugerencias"></span></p>

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
	
</body>
</html>