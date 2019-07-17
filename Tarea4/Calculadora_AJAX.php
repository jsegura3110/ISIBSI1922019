<?php
$operacion = $_POST['operacion'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

if($operacion == 1){
	echo ($num1 + $num2);
}else if($operacion == 2){
	echo ($num1 - $num2);
}else if($operacion == 3){
	echo ($num1 * $num2);
}else if($operacion == 4){
	echo ($num1 / $num2);
}
?>