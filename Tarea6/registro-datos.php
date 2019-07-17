<html>
<head>
	<title>Tarea #6</title>
</head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<body onload="CargarProvincias()">
	<div align="center">
	<h1 class="center">Datos a Registrar</h1><br>
	<div class="container"> 
	<form method="POST" action="registro-datos.php" class="Tabla table-condensed">
		<label>Cedula:</label>
		<input type="text" id="cedula" name="cedula" pattern="[0-9]{9}" placeholder="Digite su cedula -->" required="">
		<button type="button" name="infocedula">✔</button><br><br>
		<label>Nombre:</label>
		<input type="text" name="nombre" required=""><br><br>
		<label>Primer Apellido:</label>
		<input type="text" name="ap1" required=""><br><br>
		<label>Segundo Apellido:</label>
		<input type="text" name="ap2" required=""><br><br>
		<label>Telefono:</label>
		<input type="text" name="tel" pattern="[0-9]{8}" title="Numero de 8 digitos" placeholder="Digite numero de telefono" required=""><br><br>
		<label>Provincia:</label>
		<select id="provincia" name="provincia" onchange="CargarCantones(this.value)"></select><br><br>
		<label>Canton:</label>
		<select id="canton" name="canton" onchange="CargarDistritos(this.value)"></select><br><br>
		<label>Distrito:</label>
		<select id="distrito" name="distrito"></select><br><br>
		<label>Direccion Exacta:</label>
		<input type="text" name="direccion" placeholder="Ingrese direccion exacta" required="">
		<br><br><br>
		<button type="submit" name="registrar" class="btn btn-primary">Registrar informacion</button><br><br>
	</form>
	
	<?php
	if(isset($_POST['registrar']))
	{
		echo ("Datos registrados exitosamente");
	}
	?>
</body>

<script>

function CargarProvincias(){
	
	while (document.getElementById('provincia').options.length) {
        document.getElementById('provincia').remove(0);
	}
	
	var blankOpt = document.createElement('option');
    blankOpt.value = "0";
    blankOpt.innerHTML = "Seleccione su Provincia";
    document.getElementById('provincia').appendChild(blankOpt);
            $.ajax({
                        
            dataType: "json",
                        url: "https://ubicaciones.paginasweb.cr/provincias.json",
                        data: {},
                        success: function (data) {
                            var html = "";
                            for(provincia in data) {
                                var opt = document.createElement('option');
                opt.value = provincia;
                opt.innerHTML = data[provincia];
                document.getElementById('provincia').appendChild(opt);
                            }
                        }
                    });
}

function CargarCantones (idProvincia) {
        
    while (document.getElementById('canton').options.length) {
        document.getElementById('canton').remove(0);
    }
    
    var blankOpt = document.createElement('option');
    blankOpt.value = "0";
    blankOpt.innerHTML = "Seleccione su Canton";
    document.getElementById('canton').appendChild(blankOpt);
            $.ajax({
                        
            dataType: "json",
                        url: "https://ubicaciones.paginasweb.cr/provincia/" + idProvincia + "/cantones.json",
                        data: {},
                        success: function (data) {
                            var html = "";
                            for(canton in data) {
                                var opt = document.createElement('option');
                opt.value = canton;
                opt.innerHTML = data[canton];
                document.getElementById('canton').appendChild(opt);
                            }
                        }
                    });
}

function CargarDistritos (idCanton) {
    
    while (document.getElementById('distrito').options.length) {
        document.getElementById('distrito').remove(0);
    }
    
    var blankOpt = document.createElement('option');
    blankOpt.value = "0";
    blankOpt.innerHTML = "Seleccione su Distrito";
    document.getElementById('distrito').appendChild(blankOpt);
            $.ajax({
                        
            dataType: "json",
                        url: "https://ubicaciones.paginasweb.cr/provincia/" + document.getElementById('provincia').value + "/canton/" + idCanton + "/distritos.json",
                        data: {},
                        success: function (data) {
                            var html = "";
                            for(distrito in data) {
                                var opt = document.createElement('option');
                opt.value = distrito;
                opt.innerHTML = data[distrito];
                document.getElementById('distrito').appendChild(opt);
                            }
                        }
                    });				
}
	
</script>
</html>
