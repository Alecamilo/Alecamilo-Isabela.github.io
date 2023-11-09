<?php 
	include '../db/conexion1.php';
	
	if(isset($_POST['guardar'])){
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$especialidad=$_POST['especialidad'];
		$numero_de_colegiacion=$_POST['numero_de_colegiacion'];
		$horiario_de_consulta=$_POST['horiario_de_consulta'];
		$contacto=$_POST['contacto'];


		if(!empty($nombre) && !empty($apellido) && !empty($especialidad) && !empty($numero_de_colegiacion) && !empty($horiario_de_consulta) && !empty($contacto)){
			if(!filter_var($contacto)){
				echo "<script> alert('histrorial no valido');</script>";
			}else{
				$consulta_insert=$con->prepare('INSERT INTO medicos(nombre,apellido,especialidad,numero_de_colegiacion,horiario_de_consulta,contacto) VALUES(:nombre,:apellido,:especialidad,:numero_de_colegiacion,:horiario_de_consulta,:contacto)');
				$consulta_insert->execute(array(
					':nombre' =>$nombre,
					':apellido' =>$apellido,
					':especialidad' =>$especialidad,
					':numero_de_colegiacion' =>$numero_de_colegiacion,
					':horiario_de_consulta' =>$horiario_de_consulta,
					':contacto' =>$contacto


				));
				header('location: ../app/modulo2.php');
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
		<h2>Médicos</h2>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="nombre" placeholder="Nombre" class="input__text">
				<input type="text" name="apellido" placeholder="Apellido" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="especialidad" placeholder="Especialidad" class="input__text">
				<input type="text" name="numero_de_colegiacion" placeholder="Numero de colegiación" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="horiario_de_consulta" placeholder="Horiario de consulta" class="input__text">
				<input type="text" name="contacto" placeholder="contacto" class="input__text">
			</div>
            <div class="btn__group">
				<a href="../app/modulo2.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>