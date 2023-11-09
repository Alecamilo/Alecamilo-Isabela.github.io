<?php 
	include '../db/conexion1.php';


	if(isset($_GET['medicos'])){
		$id_medico=(int) $_GET['id_medico'];

		$buscar_id_medico=$con->prepare('SELECT * FROM medicos WHERE id_medico=:id_medico LIMIT 1');
		$buscar_id_medico->execute(array(
			':id_medico'=>$id_medico
		));
		$resultado=$buscar_id_medico->fetch();
	}else{
		header('location: ../app/modulo2.php');
	}
	
	if(isset($_POST['guardar'])){

		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$especialidad=$_POST['especialidad'];
		$numero_de_colegiacion=$_POST['numero_de_colegiacion'];
		$horiario_de_consulta=$_POST['horiario_de_consulta'];
		$contacto=$_POST['contacto'];
		$id_medico=(int) $_GET['id_medico'];

		


		if(!empty($nombre) && !empty($apellido) && !empty($especialidad) && !empty($numero_de_colegiacion) && !empty($horiario_de_consulta) && !empty($contacto)){
			if(!filter_var($contacto)){
				echo "<script> alert('histrorial no valido');</script>";
			}else{
				$consulta_update=$con->prepare(' UPDATE medicos SET 
				nombre=:nombre,
				apellido=:apellido,
				especialidad=:especialidad,
				numero_de_colegiacion=:numero_de_colegiacion,
				horiario_de_consulta=:horiario_de_consulta,
				contacto=:contacto
				WHERE id_medico=:id_medico;'
				);
				$consulta_update->execute(array(
					':nombre' =>$nombre,
					':apellido' =>$apellido,
					':especialidad' =>$especialidad,
					':numero_de_colegiacion' =>$numero_de_colegiacion,
					':horiario_de_consulta' =>$horiario_de_consulta,
					':contacto' =>$contacto,
					':id_medico' =>$id_medico


				));
				header('location: ../app/moduelo2.php');
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
				<input type="text" name="nombre" value="<?php if($resultado) echo $resultado['nombre']; ?>"  class="input__text">
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