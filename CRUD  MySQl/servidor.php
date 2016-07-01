<?php 
	include("conexion.php");
	$sugerencia='';
	$datosRecibidos = $_POST['marca'];
	$sugerencias = "SELECT  nombre from autos";
	
	if(strlen($datosRecibidos)>0){
		for( $i=0; $i < count($sugerencias); $i++){
			if(strtolower($datosRecibidos) == strtolower(substr($sugerencias[$i],0,strlen($datosRecibidos)))){
				if($sugerencia == ''){
					$sugerencia = $sugerencias[$i];
				}else{
					$sugerencia = $sugerencia . ' , ' . $sugerencias[$i];
				}
			}
		}
	}
	// Si no hay sugerencias se coloca esto en el Div
	if($sugerencia == ''){
		$sugerencia = 'No hay Sugerencias :( ';
	}
	// si la hay, muestra la o las sugerencias.
	echo $sugerencias;
	
	 
 ?>