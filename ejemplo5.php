<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejemplo 5</title>
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
	<h1>Tabla de Multiplicar con el Ciclo While en PHP</h1>
	<h2>Tabla del 8</h2>
	
	<?php
	$i=0;
	$numero=8;
	
	while($i<=12){
		
		$resultado=$numero*$i;
		echo "$numero * $i = $resultado <br>";
		
		
	}
	
	?>
	<h3>Fin</h3>
</body>
</html>