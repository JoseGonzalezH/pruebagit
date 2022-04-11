<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejemplo #4</title>
</head>

<body>
	<h1>Uso de variables tipo cadena</h1>
	
	<?php
		
		$cadena1="Diego";
		$cadena2="Juan";
		$cadena3="Ana";
		$cadena4="Maria";
		$todo=$cadena1 . "" . $cadena2 . "" . $cadena3 . "" . $cadena4 . "<br>";
		
		$edad1=24;
		
		echo $todo;
		echo "<br>";
		echo $cadena1 . " tiene $edad1 años de edad";
	
		
	
	?>
</body>
</html>