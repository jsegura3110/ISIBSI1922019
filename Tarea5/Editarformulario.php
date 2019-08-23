<!-- Obtener los datos para mostrarlos en los campos para editar -->
<?php
	include("conexion.php");
	if(isset($_GET['Editar']))
	{
		$editar_id = $_GET['Editar'];
		$consulta = "SELECT * from $tabla1_db where nombre='$editar_id'";
		$ejecutar= mysqli_query($conexion,$consulta);
		$fila=mysqli_fetch_array($ejecutar);

		$nombre = $fila['nombre'];
		$ap1 = $fila['ap1'];
		$ap2 = $fila['ap2'];
		$cedula = $fila['cedula'];
		$correo = $fila['correo'];
		$sexo = $fila['sexo'];
		$direccion = $fila['direccion'];
		$provincia = $fila['provincia'];
		$canton = $fila['canton'];
		$distrito = $fila['distrito'];
		$tel = $fila['tel'];
		
		if ($sexo == 1){
			$sexodescr = "Masculino";
		} elseif ($sexo == 2){
			$sexodescr = "Femenino";
		}
	}
?>
<!-- Mostrar La informacion para editar -->
</br>
<form method="POST" action="">
		<label>Nombre:</label>
		<input type="text" name="editnombre" value="<?php echo $nombre;?>" ><br/><br/>
		<label>Primer Apellido:</label>
		<input type="text" name="editap1" value="<?php echo $ap1;?>" ><br/><br/>
		<label>Segundo Apellido:</label>
		<input type="text" name="editap2" value="<?php echo $ap2;?>" ><br/><br/>
		<label>Cedula:</label>
		<input type="text" name="editcedula" value="<?php echo $cedula;?>"><br/><br/>
		<label>Correo Electronico:</label>
		<input type="text" name="editemail" value="<?php echo $correo;?>"><br/><br/>
		<label>Sexo:</label>
		<select name="editsexo">
			  <option value="<?php echo $sexo;?>"><?php echo $sexodescr;?></option>
			  <option value="1">Masculino</option>
			  <option value="2">Femenino</option>
		</select><br><br>
		<label>Direccion Exacta:</label>
		<input type="text" name="editdireccion" value="<?php echo $direccion;?>"><br/><br/>
		<label>Provincia:</label>
		<input type="text" name="editprovincia" value="<?php echo $provincia;?>"><br/><br/>
		<label>Canton:</label>
		<input type="text" name="editcanton" value="<?php echo $canton;?>"><br/><br/>
		<label>Distrito:</label>
		<input type="text" name="editdistrito" value="<?php echo $distrito;?>"><br/><br/>
		<label>Telefono:</label>
		<input type="text" name="edittel" value="<?php echo $tel;?>">
		<br/><br/><br/>
	<input type="submit" name="actualizarempl"  class="btn btn-primary" value="Actualizar Datos"/>
</form>

<?php
if(isset($_POST['actualizarempl']))
{
	$actualizar_nombre=$_POST['editnombre'];
	$actualizar_ap1=$_POST['editap1'];
	$actualizar_ap2=$_POST['editap2'];
	$actualizar_cedula=$_POST['editcedula'];
	$actualizar_correo=$_POST['editemail'];
	$actualizar_direccion=$_POST['editdireccion'];
	$actualizar_sexo=$_POST['editsexo'];
	$actualizar_provincia=$_POST['editprovincia'];
	$actualizar_canton=$_POST['editcanton'];
	$actualizar_distrito=$_POST['editdistrito'];
	$actualizar_telefono=$_POST['edittel'];

	$actualizar="UPDATE datos SET
	nombre='$actualizar_nombre',
	ap1='$actualizar_ap1',
	ap2='$actualizar_ap2',
	cedula='$actualizar_cedula',
	sexo='$actualizar_sexo',
	correo='$actualizar_correo',
	direccion='$actualizar_direccion',
	provincia='$actualizar_provincia',
	canton='$actualizar_canton',
	distrito='$actualizar_distrito',
	tel='$actualizar_telefono'
	where nombre='$editar_id'";
	$ejecutar=mysqli_query($conexion,$actualizar);
	if($ejecutar)
	{
		echo "<script>alert('Datos actualizados correctamente!!!')</script>";
		echo "<script>window.open('formulario.php','self')</script>";	
	}
}
?>