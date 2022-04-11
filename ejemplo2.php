<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejemplo #2</title>
</head>

<body>
	<h1>Ejemplo #2 Uso de variables y condicionales en PHP</h1>
	
	<?php
		
		date_default_timezone_set("America/Costa_Rica"); // comando tomar la fecha de CR
		$dia=date("d"); // d = dia m= mes a=año
		$fecha=date("d-M-y H:i:s"); //m mes con numero, M mes con letras
		
		if($dia<=10){  // != <> diferente 
			
			echo "Sitio Activo";
		}
		else{
			
			echo "Sitio fuera de Servicio";
		}
		echo "<br>";
		echo "Numero de dia es $dia";
		echo "<br>";
		echo "Fecha $fecha";
	
	?>
</body>
</html>