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
		<select name="sexo">
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
		<button type="submit" name ="almacenar" class="btn btn-primary">Almacenar datos</button><br><br>

</div>
	 </form>
	 
<!-- Insertar Datos -->
	<?php
	 include("conexion.php");
	 if(isset($_POST['almacenar']))
      { 
			$nombre=$_POST['nombre'];
			$ap1=$_POST['ap1'];
			$ap2=$_POST['ap2'];
			$cedula=$_POST['cedula'];
			$correo=$_POST['correo'];
			$sexo=$_POST['sexo'];
			$direccion=$_POST['direccion'];
			$provincia=$_POST['provincia'];
			$canton=$_POST['canton'];
			$distrito=$_POST['distrito'];
			$tel=$_POST['tel'];
			
        if ($nombre==""||$ap1==""||$ap2==""||$cedula==""||$correo==""||$direccion==""||$provincia==""||$canton==""||$distrito==""||$tel==""){
          echo "Todos los campos son obligatorios ";
        }else{
         mysqli_query($conexion, "INSERT INTO $tabla1_db 
        (nombre,
        ap1,
        ap2,
		cedula,
		correo,
		sexo,
		direccion,
		provincia,
		canton,
		distrito,
        tel)
        values ('$nombre',
        '$ap1',
        '$ap2',
		'$cedula',
		'$correo',
		'$sexo',
		'$direccion',
		'$provincia',
		'$canton',
		'$distrito',
        '$tel')");
         echo "Datos agregados exitosamente";
        }	
    }
	?>
	<br/><br/>
	
<!-- Listar Datos -->
<div class="container">
	<table width="500" border="2" style="background-color: #f9f9f9;">
		<tr>
			<th>Nombre</th>
			<th>Primer Apellido</th>
			<th>Segundo Apellido</th>
			<th>Cedula</th>
			<th>Correo Electronico</th>
			<th>Sexo</th>
			<th>Direccion</th>
			<th>Provincia</th>
			<th>Canton</th>
			<th>Distrito</th>
			<th>Telefono</th>
			<th>Editar</th>
			<th>Borrar</th>
	</tr>
		<?php
		$consulta= "SELECT * from $tabla1_db";
		$ejecutar = mysqli_query($conexion,$consulta);
		$i=0;
  	while($fila=mysqli_fetch_array($ejecutar))
  		{
  			$nombre=$fila['nombre'];
    		$ap1=$fila['ap1'];
			$ap2=$fila['ap2'];
			$cedula=$fila['cedula'];
			$correo=$fila['correo'];
			$sexo=$fila['sexo'];
			$direccion=$fila['direccion'];
			$provincia=$fila['provincia'];
			$canton=$fila['canton'];
			$distrito=$fila['distrito'];
			$tel=$fila['tel'];
			$i++;
	?>
		<tr align="center">
		<td><?php echo $nombre;?></td>
		<td><?php echo $ap1;?></td>
		<td><?php echo $ap2;?></td>
		<td><?php echo $cedula;?></td>
		<td><?php echo $correo;?></td>
		<td><?php echo $sexo;?></td>
		<td><?php echo $direccion;?></td>
		<td><?php echo $provincia;?></td>
		<td><?php echo $canton;?></td>
		<td><?php echo $distrito;?></td>
		<td><?php echo $tel;?></td>

		<td><a href="formulario.php?Editar=<?php echo $nombre;?>"</a>Editar</td>
		<td><a href="formulario.php?Borrar=<?php echo $nombre;?>"</a>Borrar</td>
	</tr>
	<?php
}
?>
	</table>
	
<!-- Editar Datos -->
<?php
 if(isset($_GET['Editar'])){
 	include("Editarformulario.php");
 }
?>
<!-- Borrar Datos -->
 <?php
 if(isset($_GET['Borrar'])){
 	$borrar_id =$_GET['Borrar'];
 	$borrar="DELETE from $tabla1_db where nombre ='$borrar_id'";
	$ejecutar=mysqli_query($conexion,$borrar);
	if($ejecutar)
	{
		echo "<script>alert('Cliente ha sido borrado!')</script>";	
	}
		header('Location: formulario.php');
 }
?>

</body>
</html>
<?php 
		
?>