<?php 
	include '../db/conexion1.php';
	
	if(isset($_POST['guardar'])){
		$id_paciente=$_POST['id_paciente'];
		$fecha_de_la_cita=$_POST['fecha_de_la_cita'];
		$motivo_de_la_cita=$_POST['motivo_de_la_cita'];
		$estado_de_la_cita=$_POST['estado_de_la_cita'];


		if(!empty($id_paciente) && !empty($fecha_de_la_cita) && !empty($motivo_de_la_cita) && !empty($estado_de_la_cita)){
			if(!filter_var($estado_de_la_cita)){
				echo "<script> alert('histrorial no valido');</script>";
			}else{
				$consulta_insert=$con->prepare('INSERT INTO citas(id_paciente,fecha_de_la_cita,motivo_de_la_cita,estado_de_la_cita) VALUES(:id_paciente:fecha_de_la_cita,:motivo_de_la_cita,:estado_de_la_cita)');
				$consulta_insert->execute(array(
					
					':id_paciente' =>$id_paciente,
					':fecha_de_la_cita' =>$fecha_de_la_cita,
					':motivo_de_la_cita' =>$motivo_de_la_cita,
					':estado_de_la_cita' =>$estado_de_la_cita


				));
				header('location:../app/modulo3.php');
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
		<h2>Citas</h2>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="fecha_de_la_cita" placeholder="Fecha de la cita" class="input__text">
				<input type="text" name="motivo_de_la_cita" placeholder="Motivo de la cita" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="estado_de_la_cita" placeholder="Estado de la cita" class="input__text">
			</div>
            <div class="btn__group">
				<a href="../app/modulo3.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>