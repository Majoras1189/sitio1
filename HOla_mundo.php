<html>
	<head>
		<title> Mi primer PHP</title>
	</head>
	<body>
		<?php echo '<p>Hola mundo</p>'; 
function mi_funcion($a,$b){
	$suma = $a+$b;
	echo "El resultado es: ".$suma;
}
#mi_funcion(5,4);

function milla_a_km($a){
	$conversion = $a*1.609;
	echo "El resultado de la conversión de millas a km es de: " .$conversion, "km";
}
milla_a_km(5);

function gradosf_a_gradosc($a){
	$conversion = $a-32/1.8;
	echo "El resultado de la conversión de Fahrenheit a Celsius: ".$conversion, "°";
}
gradosf_a_gradosc(10);


?>

	</body>
</html>
