<html>
<title>Ejercicio #11 PHP</title>
<body>
<h1>Resultado Calculadora </h1>
<?php
	if($_POST["Operacion"] == 1){
		echo("Resultado: ".strval($_POST["Numero1"] + $_POST["Numero2"]));
	}
	if($_POST["Operacion"] == 2){
		echo("Resultado: ".strval($_POST["Numero1"] - $_POST["Numero2"]));
	}
	if($_POST["Operacion"] == 3){
		echo("Resultado: ".strval($_POST["Numero1"] * $_POST["Numero2"]));
	}
	if($_POST["Operacion"] == 4){
		echo("Resultado: ".strval($_POST["Numero1"] / $_POST["Numero2"]));
	}
?>
</body>
</html>