<html>
<title>Ejercicio #11 PHP</title>
<body>
<h1>Resultado Calculadora </h1>
<?php
$valor1 = $_POST["Numero1"];
$valor2 = $_POST["Numero2"];
$operacion = $_POST["Operacion"];

	if($operacion == 1){
		echo("Resultado: ".strval($valor1 + $valor2));
	}
	if($operacion == 2){
		echo("Resultado: ".strval($valor1 - $valor2));
	}
	if($operacion == 3){
		echo("Resultado: ".strval($valor1 * $valor2));
	}
	if($operacion == 4){
		echo("Resultado: ".strval($valor1 / $valor2));
	}
?>
</body>
</html>