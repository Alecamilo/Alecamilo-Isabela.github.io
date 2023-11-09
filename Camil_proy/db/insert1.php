<?php 
	include '../db/conexion1.php';
	
	if(isset($_POST['guardar'])){

		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$fecha_de_nacimiento=$_POST['fecha_de_nacimiento'];
		$genero1=$_POST['genero1'];
		$genero2=$_POST['genero2'];
		$direccion=$_POST['direccion'];
		$numero_de_Telefono=$_POST['numero_de_Telefono'];
		$historial_Medicos=$_POST['historial_Medicos'];

		if($genero1 == null){
			$genero = 'Masculino';
		}else{
			$genero = 'Femenino';
		}


		if(!empty($nombre) && !empty($apellido) && !empty($fecha_de_nacimiento && !empty($genero) && !empty($direccion) && !empty($numero_de_Telefono) && !empty($historial_Medicos))){
			if(!filter_var($historial_Medicos)){
				echo "<script> alert('histrorial no valido');</script>";
			}else{
				$consulta_insert=$con->prepare('INSERT INTO pacientes(nombre,apellido,fecha_de_nacimiento,genero,direccion,numero_de_Telefono,historial_Medicos) VALUES(:nombre,:apellido,:fecha_de_nacimiento,:genero,:direccion,:numero_de_Telefono,:historial_Medicos)');
				$consulta_insert->execute(array(
		
					':nombre' =>$nombre,
					':apellido' =>$apellido,
					':fecha_de_nacimiento' =>$fecha_de_nacimiento,
					':genero' =>$genero,
					':direccion' =>$direccion,
					':numero_de_Telefono' =>$numero_de_Telefono,
					':historial_Medicos' =>$historial_Medicos


				));
				header('location: ../app/modulo1.php');
			}
		}else{
			echo "<script> alert('Los campos estan vacios');</script>";
		}

	}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nuevo Cliente</title>
	<link rel="stylesheet" href="../css/style_app.css">
</head>
<body>
	<div class="contenedor">
		<h2>Pacientes</h2>
		<form action="" method="POST">
			<div class="form-group">
				<input type="text" name="nombre" placeholder="Nombre" class="input__text">
				<input type="text" name="apellido" placeholder="Apellido" class="input__text">
			</div>
			<div class="form-group">
				<input type="date" name="fecha_de_nacimiento" placeholder="Fecha de Nacimiento" class="input__text">
				<p>Genero</p>
				<input type="radio" id="genero1" name="genero1">
  				<label for="genero1">Femenino</label><br>
  				<input type="radio" id="genero2" name="genero2">
  				<label for="genero2">Masculino</label><br>  
			</div>
			<div class="form-group">
				<input type="text" name="direccion" placeholder="Direccion" class="input__text">
				<input type="text" name="numero_de_Telefono" placeholder="Numero de Telefono" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="historial_Medicos" placeholder="Historial Medicos" class="input__text">
			</div>
            <div class="btn__group">
				<a href="../app/modulo1.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>