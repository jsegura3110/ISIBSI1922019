<html>
<head>
	<title>Tarea #5</title>
	</head>
<body>
	<div align="center">
	<h1 class="center">Formulario</h1>
	<div class="container"> 
	<form method="POST" action="formulario.php" class="Tabla table-condensed">
		<label>Nombre:</label>
		<input type="text" name="nombre" placeholder="Ingrese nombre"required=""><br><br>
		<label>Primer Apellido:</label>
		<input type="text" name="ap1" placeholder="Ingrese 1er apellido" required=""><br><br>
		<label>Segundo Apellido:</label>
		<input type="text" name="ap2" placeholder="Ingrese 2do Apellido" required=""><br><br>
		<label>Cedula:</label>
		<input type="text" name="cedula" pattern="[0-9]{9}" title="Cedula de 9 digitos" placeholder="Cedula de 9 digitos" required=""><br><br>
		<label>Correo Electronico:</label>
		<input type="text" name="correo" placeholder="            @" required=""><br><br>
		<label>Sexo:</label>
		<select name="sexo"  >
			  <option value="1">Masculino</option>
			  <option value="2">Femenino</option>
		</select><br><br>
		<label>Direccion:</label>
		<input type="text" name="direccion" placeholder="Ingrese direccion exacta" required=""><br><br>
		<label>Provincia:</label>
		<input type="text" name="provincia" placeholder="Ingrese provincia"required=""><br><br>
		<label>Canton:</label>
		<input type="text" name="canton" placeholder="Ingrese canton" required=""><br><br>
		<label>Distrito:</label>
		<input type="text" name="distrito" placeholder="Ingrese distrito" required=""><br><br>
		<label>Telefono:</label>
		<input type="text" name="tel" pattern="[0-9]{8}" placeholder="Ingrese numero de telefono" required="">
		<br><br><br>
		<button type="submit" name ="agregar" class="btn btn-primary">Almacenar datos</button><br><br>

</div>
<!-- Insertar datos a la BD -->
	 </form>
	<?php
	 include("conexion.php");
	 if(isset($_POST['agregar']))
      { 
			$nombre=$_POST['nombre'];
			$ap1=$_POST['ap1'];
			$ap2=$_POST['ap2'];
			$cedula=$_POST['cedula'];
			$correo=$_POST['correo'];
			$direccion=$_POST['direccion'];
			$provincia=$_POST['provincia'];
			$canton=$_POST['canton'];
			$distrito=$_POST['distrito'];
			$tel=$_POST['tel'];
			
        if ($nombre==""||$ap1==""||$ap2==""||$cedula==""||$correo==""||$direccion==""||$provincia==""||$canton==""||$distrito==""||$tel==""){
          echo "Todos los campos son obligatorios ";
        }else{
         mysqli_query($conexion, "INSERT INTO $tabla1_db 
        (fecha_ordenes,
        hora_ordenes,
        nummesa_ordenes,
		cliente_ordenes,
		platillos_ordenes,
        estado_ordenes)
        values ('$fecha',
        '$hora',
        '$nummesa',
		'$cliente',
		'$platillos',
        '$estado')");
         echo "Datos agregados exitosamente";
        }	
    }
	?>
</body>
</html>
<?php 
		
?>